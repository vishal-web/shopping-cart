<?php

namespace App\Http\Controllers\ShopAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{

	public function __construct() {
		
	}
	
	public function index() {
		echo 'Order Controller Called';
	}
}
