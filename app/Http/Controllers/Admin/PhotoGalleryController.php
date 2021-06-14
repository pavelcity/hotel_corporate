<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photogallery;

class PhotoGalleryController extends Controller
{


	public function index()
	{
		$photos = Photogallery::all();
		return view('admin.photogalery.index', compact('photos'));
	}




	#create
	public function create()
	{
		return view('admin.photogalery.create');
	}






	#store 
	public function store(Request $request)
	{
		$this->validate($request, [
			'title' => 'required',
			'pic' => 'required|mimes:jpg,jpeg,png',
		], [
			'title.required' => 'Название фотографии',
			'pic.required' => 'нужна картинка',
			'pic.mimes' => 'фотография в формате jpg | jpeg | png',
		]);

		$photo = new Photogallery;

		$pic = $request->file('pic');


		$name_gen = hexdec(uniqid());
		$img_ext = strtolower($pic->getClientOriginalExtension());
		$img_name = $name_gen . '.' . $img_ext;
		$up_location = 'uploads/photogallery/';
		$last_avatar = $up_location . $img_name;
		$pic->move($up_location, $img_name);



		$photo->title = $request->title;
		$photo->pic = $last_avatar;
		$photo->save();

		return redirect()->route('admin.photogallery.home');
	}







	#edit
	public function edit($id)
	{
		$photo = Photogallery::find($id);
		return view('admin.photogalery.edit', compact('photo'));
	}






	#update 
	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'title' => 'required',
			'pic' => 'mimes:jpg,jpeg,png',
		], [
			'title.required' => 'Название фотографии',
			'pic.mimes' => 'фотография в формате jpg | jpeg | png',
		]);

		$photo = Photogallery::find($id);

		$pic = $request->file('pic');
		$old_pic = $request->old_pic;


		if ($pic) {
			$name_gen = hexdec(uniqid());
			$img_ext = strtolower($pic->getClientOriginalExtension());
			$img_name = $name_gen . '.' . $img_ext;
			$up_location = 'uploads/photogallery/';
			$last_avatar = $up_location . $img_name;
			$pic->move($up_location, $img_name);


			unlink($old_pic);
			$photo->title = $request->title;
			$photo->pic = $last_avatar;
			$photo->save();

			return redirect()->route('admin.photogallery.home');
		} else {
			$photo->title = $request->title;
			$photo->save();

			return redirect()->route('admin.photogallery.home');
		}
	}











	#delete
	public function delete($id)
	{
		$photo = Photogallery::find($id);
		$old_pic = $photo->pic;

		unlink($old_pic);

		$photo->delete();
		return redirect()->route('admin.photogallery.home');
	}


	#others
}
