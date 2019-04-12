<?php

namespace App\Http\Controllers\ShopAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
	public function __construct() {
		
	}
	
	public function index() {
		echo 'Customer Controller Called';
	}
}
