<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orderutp;



class OrderUtpController extends Controller
{


	public function index()
	{
		$orders = Orderutp::latest()->get();
		return view('admin.orderutp.index', compact('orders'));
	}
}
