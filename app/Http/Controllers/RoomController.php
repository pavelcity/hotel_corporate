<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{


	public function index()
	{
		// dd('rooms');
		$rooms = Room::latest()->get();
		return view('pages.nomera.index', compact('rooms'));
	}



	#detail
	public function detail($slug)
	{
		$room = Room::where('slug', $slug)->firstOrFail();
		return view('pages.nomera.detail', compact('room'));
	}






	// форма брони на детальной странице
	public function ordernomer(Request $request)
	{
		// dd($request->all());
		return redirect()->route('rooms.home');
	}

	#others
}
