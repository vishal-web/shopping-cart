<?php

namespace App\Http\Controllers\ShopAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\ShopAdmin\Product;
use Validator;
use DB;

class ProductController extends Controller
{
	public function __construct() {
		
	}

	public function index() { 

		// $data['products'] = Product::with('parent')->get()->toArray();
		$data['products'] = [];

		$data['title'] = 'Product';
		$data['headline'] = 'Manage Product';
		$data['show_bc'] = FALSE;
		$data['breadcrumbs'] = [
			['title' => 'Home', 'url' => ''],
			['title' => 'Product', 'url' => '/shopadmin/product'],
		];
		return view('admin/product/index',$data);
	}

	/*
		Add / Update / Edit Product
	*/
	public function add(Request $request) {

		$post = $request->input();

		$update_id = 0;

		if (!empty($post) && isset($post['submit']) && $post['submit'] == 'Submit') {
			$validator = Validator::make($request->input(),[
				'title' => 'required',
				'price' => 'required',
				'was_price' => 'required',
				'quantity' => 'required',
			]);	

			if (!$validator->fails()) {
				if ($update_id > 0) {

				} else {
					$data = $validator->getData();
					$productData = [
						'title' => $data['title'],
						'slug' => str_slug($data['title'],'-'),
						'parent_id' => ($data['parent_id'] == "") ? 0 : (int)$data['parent_id'],
					];

					$query = Product::create($productData);

					if (!empty($query)) {
						$response = ['status' => 'success' ,'message' => 'Product added successfully.'];
					} else {
						$response = ['status' => 'error' ,'message' => 'Something went wrong while adding product.'];
					}
					return redirect()->back()->with($response);
				}
			} else {
				return redirect()->back()->withErrors($validator->errors())->withInput();
			}
		} else if (isset($post['submit']) && $post['submit'] == 'Cancel') {
			return redirect('/shopadmin/product');
		}
		$data['parent_products'] = [];
		$data['title'] = $data['headline'] = 'Add New Product';
		$data['bc_headline'] = 'Product';
		$data['show_bc'] = TRUE;
		$data['breadcrumbs'] = [
			['title' => 'Home', 'url' => ''],
			['title' => 'Add new product', 'url' => '/shopadmin/product/create'],
		];

		return view('admin/product/create',$data);
	}

	private function productParent() {
		return Product::where('parent_id',0)->get()->toArray();
	}
}
