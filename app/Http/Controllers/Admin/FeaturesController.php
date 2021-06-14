<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;

class FeaturesController extends Controller
{


	public function index()
	{
		$features = Feature::all();
		return view('admin.features.index', compact('features'));
	}





	#create
	public function create()
	{
		$ficha = Feature::first();
		return view('admin.features.create', compact('ficha'));
	}




	#store
	public function store(Request $request)
	{
		$this->validate($request, [
			'title' => 'required|unique:features|max:150',
			'descr' => 'required',
			'pic' => 'required|mimes:jpg,jpeg,png,svg'
		], [
			'title.required' => 'Придумайте заголовок',
			'title.max' => 'Не более 150 символов',
			'descr.required' => 'Без описания ни как нельзя',
			'pic.required' => 'Нужна маленькая картинка, в данном случае будет предпочтительная в формате svg, но другие тоже подойдут (jpg | jpeg | png)',
			'pic.mimes' => 'картинка должна быть в формате jpg | jpeg | png | svg, желательно в формате svg',
		]);

		$feature = new Feature;


		$pic = $request->file('pic');

		$name_gen = hexdec(uniqid());
		$img_ext = strtolower($pic->getClientOriginalExtension());
		$img_name = $name_gen . '.' . $img_ext;
		$up_location = 'uploads/features/';
		$last_img = $up_location . $img_name;
		$pic->move($up_location, $img_name);




		$feature->title = $request->title;
		$feature->descr = $request->descr;
		$feature->pic = $last_img;
		$feature->save();

		return redirect()->route('admin.features.home');
	}











	#edit
	public function edit($id)
	{
		$ficha = Feature::find($id);
		return view('admin.features.edit', compact('ficha'));
	}







	#update
	public function update(Request $request, $id)
	{

		$this->validate($request, [
			'title' => 'required',
			'descr' => 'required',
			'pic' => 'mimes:jpg,jpeg,png,svg'
		], [
			'title.required' => 'Придумайте заголовок',
			'descr.required' => 'Без описания ни как нельзя',
			'pic.mimes' => 'картинка должна быть в формате jpg | jpeg | png | svg, желательно в формате svg',
		]);


		$ficha = Feature::find($id);

		$old_image = $request->old_image;
		$pic = $request->file('pic');


		if ($pic) {
			$name_gen = hexdec(uniqid());
			$img_ext = strtolower($pic->getClientOriginalExtension());
			$img_name = $name_gen . '.' . $img_ext;
			$up_location = 'uploads/features/';
			$last_img = $up_location . $img_name;
			$pic->move($up_location, $img_name);


			unlink($old_image);
			$ficha->update([
				'title' => $request->title,
				'descr' => $request->descr,
				'pic' => $last_img,
			]);


			return redirect()->route('admin.features.home');
		} else {

			$ficha->update([
				'title' => $request->title,
				'descr' => $request->descr,
			]);


			return redirect()->route('admin.features.home');
		}
	}








	#delete 
	public function delete($id)
	{
		$ficha = Feature::find($id);

		$old_image = $ficha->pic;
		unlink($old_image);

		$ficha->delete();
		return redirect()->route('admin.features.home');
	}





	#other
}
