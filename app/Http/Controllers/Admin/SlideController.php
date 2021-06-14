<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductImage;
use App\Models\Product;
use Image;

class SlideController extends Controller
{


	#index
	public function index()
	{
		$slides = ProductImage::get();
		return view('admin.slides.index', compact('slides'));
	}






	#create
	public function create()
	{
		$products = Product::get();
		return view('admin.slides.create', compact('products'));
	}







	#store 
	public function store(Request $request)
	{
		$this->validate($request, [
			'product_id' => 'required',
			'title' => 'required',
			'slide' => 'required',
		], [
			'product_id.required' => 'обязательное поле',
			'title.required' => 'обязательное поле',
			'slide.required' => 'нужна картинка',
		]);


		$pic = new ProductImage;

		$slide = $request->file('slide');

		if ($slide) {

			$name_gen = hexdec(uniqid()) . '.' . $slide->getClientOriginalExtension();
			$last_slide = 'uploads/slides/' . $name_gen;
			Image::make($slide)->resize(1000, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/slides/' . $name_gen);



			$pic->product_id = $request->product_id;
			$pic->title = $request->title;
			$pic->slide = $last_slide;
			$pic->save();

			return redirect()->route('admin.slide.home');
		} else {
			$pic->product_id = $request->product_id;
			$pic->title = $request->title;
			$pic->save();

			return redirect()->route('admin.slide.home');
		}
	}







	#edit
	public function edit($id)
	{
		$slide = ProductImage::find($id);
		$products = Product::get();
		return view('admin.slides.edit', compact('slide', 'products'));
	}








	#update 
	public function update(Request $request, $id)
	{


		$this->validate($request, [
			// 'product_id' => 'required',
			'title' => 'required',
		], [
			// 'product_id.required' => 'обязательное поле',
			'title.required' => 'обязательное поле',
		]);


		$pic = ProductImage::find($id);

		$slide = $request->file('slide');
		$old_slide = $request->old_slide;

		if ($slide) {

			$name_gen = hexdec(uniqid()) . '.' . $slide->getClientOriginalExtension();
			$last_slide = 'uploads/slides/' . $name_gen;
			Image::make($slide)->resize(1000, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/slides/' . $name_gen);

			if ($old_slide) {
				unlink($old_slide);
			}


			// dd($request->product_id);

			$pic->update([
				'product_id' => $request->product_id,
				'title' => $request->title,
				'slide' => $last_slide,
			]);

			return redirect()->route('admin.slide.home');
		} else {
			$pic->update([
				'product_id' => $request->product_id,
				'title' => $request->title,
			]);

			return redirect()->route('admin.slide.home');
		}
	}







	#delete
	public function delete($id)
	{
		$pic = ProductImage::find($id);

		$old_slide = $pic->slide;
		if ($old_slide) {
			unlink($old_slide);
		}

		$pic->delete();
		return redirect()->route('admin.slide.home');
	}






	#
}
