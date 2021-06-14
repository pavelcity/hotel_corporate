<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photogallery;

class PhotogalleryController extends Controller
{


	public function index()
	{
		$photos = Photogallery::all();
		return view('pages.photogalery.index', compact('photos'));
	}


	#others
}
