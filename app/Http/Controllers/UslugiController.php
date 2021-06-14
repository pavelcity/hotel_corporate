<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uslugi;

class UslugiController extends Controller
{
	public function index()
	{
		$uslugi = Uslugi::first();
		return view('pages.uslugi.index', compact('uslugi'));
	}
}
