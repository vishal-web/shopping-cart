<?php

namespace App\Http\Controllers\ShopAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ShopAdmin\Category;
use Validator;
use DB;

class CategoryController extends Controller
{

	public function __construct() {
		
	}

	public function index() { 

		$data['categories'] = Category::with('parent')->get()->toArray();

		$data['title'] = 'Category';
		$data['headline'] = 'Manage Category';
		$data['show_bc'] = FALSE;
		$data['breadcrumbs'] = [
			['title' => 'Home', 'url' => ''],
			['title' => 'Category', 'url' => '/shopadmin/category'],
		];
		return view('admin/category/index',$data);
	}


	/*
		Add Category
	*/
	public function add(Request $request) {

		$post = $request->input();

		$update_id = 0;

		if (!empty($post) && isset($post['submit']) && $post['submit'] == 'Submit') {
			$validator = Validator::make($request->input(),[
				'title' => 'required'
			]);	

			if (!$validator->fails()) {
				if ($update_id > 0) {

				} else {
					$data = $validator->getData();
					$categoryData = [
						'title' => $data['title'],
						'slug' => str_slug($data['title'],'-'),
						'parent_id' => ($data['parent_id'] == "") ? 0 : (int)$data['parent_id'],
					];

					$query = Category::create($categoryData);

					if (!empty($query)) {
						$response = ['status' => 'success' ,'message' => 'Category added successfully.'];
					} else {
						$response = ['status' => 'error' ,'message' => 'Something went wrong while adding category.'];
					}
					return redirect()->back()->with($response);
				}
			} else {
				return redirect()->back()->withErrors($validator->errors());
			}
		} else if (isset($post['submit']) && $post['submit'] == 'Cancel') {
			return redirect('/shopadmin/category');
		}
		$data['parent_categories'] = $this->categoryParent();
		$data['title'] = $data['headline'] = 'Add New Category';
		$data['bc_headline'] = 'Category';
		$data['show_bc'] = TRUE;
		$data['breadcrumbs'] = [
			['title' => 'Home', 'url' => ''],
			['title' => 'Add new category', 'url' => '/shopadmin/category/create'],
		];

		return view('admin/category/create',$data);
	}

	private function categoryParent() {
		return Category::where('parent_id',0)->get()->toArray();
	}
}
