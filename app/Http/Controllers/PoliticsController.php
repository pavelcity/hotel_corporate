<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class PoliticsController extends Controller
{



	#confidenc
	public function confidenc()
	{
		$profile = Profile::first();
		return view('pages.politics.politics', compact('profile'));
	}



	#usloviaborny
	public function usloviaborny()
	{
		return view('pages.politics.usloviabrony');
	}






	#
}
