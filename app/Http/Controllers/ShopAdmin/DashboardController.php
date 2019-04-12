<?php

namespace App\Http\Controllers\ShopAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

	public function __construct() {
		
	}

	public function index() {
		/*$data['headline'] = 'Dashboard';
		$data['breadcrumbs'] = [
			['title' => 'Home', 'url' => ''],
			['title' => 'Dashboard', 'url' => '/shopadmin/dashboard'],
		];*/

		$data[''] = '';

		return view('admin/dashboard',$data);
	}
}