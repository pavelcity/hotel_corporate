<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use Auth;
use App\Models\User;

class ProfileController extends Controller
{
	public function index()
	{
		$id = Auth::user()->id;
		$user = User::find($id);

		$profile = Profile::all();
		return view('admin.profile.index', compact('user', 'profile'));
	}


 


	#create info for profile
	public function create()
	{
		$profile = Profile::first();
		return view('admin.profile.create', compact('profile'));
	}








	#store
	public function store(Request $request)
	{

		$this->validate($request, [
			'title' => 'required',
			// 'subtitle' => 'required',
			// 'phone' => 'required',
			// 'email' => 'email',
			// 'adress' => 'required',
			// 'baner' => 'mimes:jpg,jpeg,png,svg',
			// 'logo' => 'mimes:jpg,jpeg,png,svg',
			// 'usloviabrony' => 'required',
			// 'politics' => 'required',
			// 'map' => 'required',
		], [
			'title.required' => 'Введите название отеля',
			// 'subtitle.required' => 'Введите название подзаголовка на банере',
			// 'phone.required' => 'Заполните это поле',
			// 'email.email' => 'введите e-mail',
			// 'adress.required' => 'Заполните это поле',
			// 'baner.mimes' => 'картинка должна быть в формате jpg | jpeg | png | svg',
			// 'logo.required' => 'загрузите логотип',
			// 'logo.mimes' => 'логотип должен быть в формате jpg | jpeg | png | svg',
			// 'usloviabrony.required' => 'введите текст правила бронирования номера',
			// 'politics.required' => 'введите текст политики конфиденциальности',
			// 'map.required' => 'код карты яндекс конструктор карт',
		]);


		$baner = $request->file('baner');
		$logo = $request->file('logo');

		if ($baner) {
			$name_gen = hexdec(uniqid());

			$img_ext = strtolower($baner->getClientOriginalExtension());


			$img_name = $name_gen . '.' . $img_ext;


			$up_location = 'uploads/utp/';

			$last_img = $up_location . $img_name;



			$baner->move($up_location, $img_name);




			Profile::create([
				'title' => $request->title,
				'subtitle' => $request->subtitle,
				'phone' => $request->phone,
				'phonetwo' => $request->phonetwo,
				'phonefortelegram' => $request->phonefortelegram,
				'email' => $request->email,
				'adress' => $request->adress,
				'baner' => $last_img,

				'usloviabrony' => $request->usloviabrony,
				'politics' => $request->politics,
				'map' => $request->map,
			]);

			return redirect()->route('admin.profile.home');
		} else if ($logo) {
			$name_gen = hexdec(uniqid());


			$logo_ext = strtolower($logo->getClientOriginalExtension());


			$logo_name = $name_gen . '.' . $logo_ext;

			$up_location = 'uploads/utp/';


			$last_logo = $up_location . $logo_name;



			$logo->move($up_location, $logo_name);



			Profile::create([
				'title' => $request->title,
				'subtitle' => $request->subtitle,
				'phone' => $request->phone,
				'phonetwo' => $request->phonetwo,
				'phonefortelegram' => $request->phonefortelegram,
				'email' => $request->email,
				'adress' => $request->adress,

				'logo' => $last_logo,
				'usloviabrony' => $request->usloviabrony,
				'politics' => $request->politics,
				'map' => $request->map,
			]);

			return redirect()->route('admin.profile.home');
		} else {
			Profile::create([
				'title' => $request->title,
				'subtitle' => $request->subtitle,
				'phone' => $request->phone,
				'phonetwo' => $request->phonetwo,
				'phonefortelegram' => $request->phonefortelegram,
				'email' => $request->email,
				'adress' => $request->adress,
				'usloviabrony' => $request->usloviabrony,
				'politics' => $request->politics,
				'map' => $request->map,
			]);

			return redirect()->route('admin.profile.home');
		}




		#others
	}







	#edit 
	public function edit($id)
	{
		$profile = Profile::find($id);
		return view('admin.profile.edit', compact('profile'));
	}






	#update
	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'title' => 'required',
			// 'subtitle' => 'required',
			// 'phone' => 'required',
			// 'email' => 'email',
			// 'adress' => 'required',
			// 'baner' => 'mimes:jpg,jpeg,png,svg',
			// 'logo' => 'mimes:jpg,jpeg,png,svg',
			// 'usloviabrony' => 'required',
			// 'politics' => 'required',
			// 'map' => 'required',
		], [
			'title.required' => 'Введите название отеля',
			// 'subtitle.required' => 'Введите название подзаголовка на банере',
			// 'phone.required' => 'Заполните это поле',
			// 'email.email' => 'введите e-mail',
			// 'adress.required' => 'Заполните это поле',
			// 'baner.mimes' => 'картинка должна быть в формате jpg | jpeg | png | svg',
			// 'logo.required' => 'загрузите логотип',
			// 'logo.mimes' => 'логотип должен быть в формате jpg | jpeg | png | svg',
			// 'usloviabrony.required' => 'введите текст правила бронирования номера',
			// 'politics.required' => 'введите текст политики конфиденциальности',
			// 'map.required' => 'код карты яндекс конструктор карт',
		]);

		$profile = Profile::find($id);
		$old_baner = $request->old_baner;
		$old_logo = $request->old_logo;
		$baner = $request->file('baner');
		$logo = $request->file('logo');

		if ($baner) {
			$name_gen = hexdec(uniqid());
			$img_ext = strtolower($baner->getClientOriginalExtension());
			$img_name = $name_gen . '.' . $img_ext;
			$up_location = 'uploads/utp/';
			$last_img = $up_location . $img_name;
			$baner->move($up_location, $img_name);

			unlink($old_baner);
			$profile->update([
				'title' => $request->title,
				'subtitle' => $request->subtitle,
				'phone' => $request->phone,
				'phonetwo' => $request->phonetwo,
				'phonefortelegram' => $request->phonefortelegram,
				'email' => $request->email,
				'adress' => $request->adress,
				'baner' => $last_img,
				'usloviabrony' => $request->usloviabrony,
				'politics' => $request->politics,
				'map' => $request->map,
			]);

			return redirect()->route('admin.profile.home');
		} else if ($logo) {
			$name_gen = hexdec(uniqid());
			$logo_ext = strtolower($logo->getClientOriginalExtension());
			$logo_name = $name_gen . '.' . $logo_ext;
			$up_location = 'uploads/utp/';
			$last_logo = $up_location . $logo_name;
			$logo->move($up_location, $logo_name);

			unlink($old_logo);
			$profile->update([
				'title' => $request->title,
				'subtitle' => $request->subtitle,
				'phone' => $request->phone,
				'phonetwo' => $request->phonetwo,
				'phonefortelegram' => $request->phonefortelegram,
				'email' => $request->email,
				'adress' => $request->adress,
				'logo' => $last_logo,
				'usloviabrony' => $request->usloviabrony,
				'politics' => $request->politics,
				'map' => $request->map,
			]);

			return redirect()->route('admin.profile.home');
		} else {

			$profile->update([
				'title' => $request->title,
				'subtitle' => $request->subtitle,
				'phone' => $request->phone,
				'phonetwo' => $request->phonetwo,
				'phonefortelegram' => $request->phonefortelegram,
				'email' => $request->email,
				'adress' => $request->adress,
				'usloviabrony' => $request->usloviabrony,
				'politics' => $request->politics,
				'map' => $request->map,
			]);

			return redirect()->route('admin.profile.home');
		}
	}





	#delete
	public function delete($id)
	{
		Profile::find($id)->delete();
		return redirect()->route('admin.profile.home');
	}

	#more
}
