<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Profile;
use App\Models\Feature;
use App\Models\Room;
use App\Models\Meta;
use App\Models\Photogallery;
use App\Models\About;
use App\Models\Orderutp;
use App\Models\Product;


class MainPageController extends Controller
{


	public function index()
	{
		$profile = Profile::first();
		$features = Feature::all();
		$rooms = Room::all();
		$meta = Meta::first();
		$hotels_pics = Photogallery::all();
		$about = About::first();
		$products = Product::get();
		return view('pages.index', compact('profile', 'features', 'rooms', 'meta', 'hotels_pics', 'about', 'products'));
	}







	# store utp
	public function store(Request $request)
	{

		$this->validate($request, [
			'dateenter' => 'required',
			'dateout' => 'required',
			'adult' => 'required',
			'children' => 'required',
			'name' => 'required',
			'phone' => 'required',
			// 'nomer' => 'required',
		]);

		$order = new Orderutp;

		$order->dateenter = $request->dateenter;
		$order->dateout = $request->dateout;
		$order->adult = $request->adult;
		$order->children = $request->children;
		$order->name = $request->name;
		$order->phone = $request->phone;
		$order->nomer = $request->nomer;
		$order->save();

		return redirect()->route('home.page');
	}









	// logout adminka 
	public function logoutAdminka()
	{
		Auth::logout();
		return redirect()->route('home.page');
	}





	// главная форма брони 
	public function orderutpdata(Request $request)
	{
		dd($request->all());
	}
}
