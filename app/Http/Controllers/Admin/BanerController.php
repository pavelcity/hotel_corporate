<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BanerController extends Controller
{
	public function index()
	{
		return view('admin.baner.index');
	}
}
