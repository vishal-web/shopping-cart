<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShopAdmin\Category;

class HomeController extends Controller
{
  //
  public function __construct() {

  }

  public function index() {
  	$data['categories'] = Category::with('children')->get()->toArray();
  	return view('home',$data);
  }

  public function category(Request $request) {
  	$segments = $request->segments();

  	if (count($segments) > 0) {
  		$first_bit  = $request->segment('1');
  		$second_bit  = $request->segment('2');

  		$category = $this->getCatDataFromSlug($first_bit);
  		$sub_category = $this->getCatDataFromSlug($second_bit);

  		$data['categories'] = $category;
  		$data['sub_categories'] = $sub_category;
  	}

  	$data['title'] = '';

  	return view('frontend.category',$data);
  }

  public function getCatDataFromSlug($slug) {
  	if ($slug != '') {
  		return Category::with('children')->where('slug',$slug)->get()->toArray();
  	} else {
  		return [];
  	}
  }

  public function aboutus() {
  	echo "About Us";
  }

  public function item() {
  	echo "Item ";
  }
}