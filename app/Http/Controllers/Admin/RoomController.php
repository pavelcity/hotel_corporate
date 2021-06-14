<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use Image;



class RoomController extends Controller
{


	public function index()
	{
		$rooms = Room::all();
		return view('admin.room.index', compact('rooms'));
	}






	#create
	public function create()
	{
		return view('admin.room.create');
	}




	#store 
	public function store(Request $request)
	{
		$this->validate(
			$request,
			[
				'title' => 'required',
				'short' => 'required',
				'price' => 'required',
				'avatar' => 'required|mimes:jpg,jpeg,png,svg',
				'descr' => 'required'
			],
			[
				'title.required' => 'Введите название',
				'short.required' => 'Нужно короткое описание',
				'price.required' => 'Укажите цену',
				'avatar.required' => 'Загрузите фото номера',
				'avatar.mimes' => 'фото в формате jpg | jpeg | png | svg',
				'descr.required' => 'Напечатайте описание номер'
			]
		);
 
 
		$room = new Room;

		$avatar = $request->file('avatar');

		$name_gen = hexdec(uniqid()) . '.' . $avatar->getClientOriginalExtension();
		$last_avatar = 'uploads/rooms/' . $name_gen;
		Image::make($avatar)->resize(800, null, function ($constraint) {
			$constraint->aspectRatio();
		})->save('uploads/rooms/' . $name_gen);


		$last_avatar = 'uploads/rooms/' . $name_gen;

		$room->title = $request->title;
		$room->short = $request->short;
		$room->price = $request->price;
		$room->avatar = $last_avatar;
		$room->descr = $request->descr;
		$room->is_wifi = $request->is_wifi;
		$room->is_saife = $request->is_saife;
		$room->is_conditioner = $request->is_conditioner;
		$room->is_bar = $request->is_bar;
		$room->is_tv = $request->is_tv;
		$room->is_garderob = $request->is_garderob;
		$room->is_utug = $request->is_utug;
		$room->is_gladilka = $request->is_gladilka;
		$room->is_otoplenie = $request->is_otoplenie;
		$room->is_kover = $request->is_kover;
		$room->is_kattle = $request->is_kattle;
		$room->is_table = $request->is_table;
		$room->is_sputniktv = $request->is_sputniktv;
		$room->is_rosetka = $request->is_rosetka;
		$room->is_kitchen = $request->is_kitchen;
		$room->is_stiralka = $request->is_stiralka;
		$room->is_holodilnik = $request->is_holodilnik;
		$room->is_kofemachina = $request->is_kofemachina;
		$room->is_mikrovolnovka = $request->is_mikrovolnovka;
		$room->is_tarelki = $request->is_tarelki;
		$room->is_posudomoika = $request->is_posudomoika;
		$room->is_electrplitka = $request->is_electrplitka;
		$room->is_obedennytable = $request->is_obedennytable;
		$room->is_sofa = $request->is_sofa;
		$room->is_gostugolok = $request->is_gostugolok;
		$room->is_kamin = $request->is_kamin;
		$room->is_terassa = $request->is_terassa;
		$room->is_selfbasein = $request->is_selfbasein;
		$room->save();

		return redirect()->route('admin.room.home');
	}









	#edit
	public function edit($id)
	{
		$room = Room::find($id);
		return view('admin.room.edit', compact('room'));
	}







	#update 
	public function update(Request $request, $id)
	{
		$this->validate(
			$request,
			[
				'title' => 'required',
				'short' => 'required',
				'price' => 'required',
				'avatar' => 'mimes:jpg,jpeg,png,svg',
				'descr' => 'required'
			],
			[
				'title.required' => 'Введите название',
				'short.required' => 'Нужно короткое описание',
				'price.required' => 'Укажите цену',
				'avatar.mimes' => 'фото в формате jpg | jpeg | png | svg',
				'descr.required' => 'Напечатайте описание номера'
			]
		);


		$room = Room::find($id);

		$avatar = $request->file('avatar');
		$old_avatar = $request->old_avatar;

		if ($avatar) {
			$name_gen = hexdec(uniqid());
			$img_ext = strtolower($avatar->getClientOriginalExtension());
			$img_name = $name_gen . '.' . $img_ext;
			$up_location = 'uploads/rooms/';
			$last_avatar = $up_location . $img_name;
			$avatar->move($up_location, $img_name);

			unlink($old_avatar);
			$room->update([
				'title' => $request->title,
				'short' => $request->short,
				'price' => $request->price,
				'avatar' => $last_avatar,
				'descr' => $request->descr,
				'is_wifi' => $request->is_wifi,
				'is_saife' => $request->is_saife,
				'is_conditioner' => $request->is_conditioner,
				'is_bar' => $request->is_bar,
				'is_tv' => $request->is_tv,
				'is_garderob' => $request->is_garderob,
				'is_utug' => $request->is_utug,
				'is_gladilka' => $request->is_gladilka,
				'is_otoplenie' => $request->is_otoplenie,
				'is_kover' => $request->is_kover,
				'is_kattle' => $request->is_kattle,
				'is_table' => $request->is_table,
				'is_sputniktv' => $request->is_sputniktv,
				'is_rosetka' => $request->is_rosetka,
				'is_kitchen' => $request->is_kitchen,
				'is_stiralka' => $request->is_stiralka,
				'is_holodilnik' => $request->is_holodilnik,
				'is_kofemachina' => $request->is_kofemachina,
				'is_mikrovolnovka' => $request->is_mikrovolnovka,
				'is_tarelki' => $request->is_tarelki,
				'is_posudomoika' => $request->is_posudomoika,
				'is_electrplitka' => $request->is_electrplitka,
				'is_sofa' => $request->is_sofa,
				'is_gostugolok' => $request->is_gostugolok,
				'is_kamin' => $request->is_kamin,
				'is_terassa' => $request->is_terassa,
				'is_selfbasein' => $request->is_selfbasein,
			]);

			return redirect()->route('admin.room.home');
		} else {

			$room->update([
				'title' => $request->title,
				'short' => $request->short,
				'price' => $request->price,
				'descr' => $request->descr,
				'is_wifi' => $request->is_wifi,
				'is_saife' => $request->is_saife,
				'is_conditioner' => $request->is_conditioner,
				'is_bar' => $request->is_bar,
				'is_tv' => $request->is_tv,
				'is_garderob' => $request->is_garderob,
				'is_utug' => $request->is_utug,
				'is_gladilka' => $request->is_gladilka,
				'is_otoplenie' => $request->is_otoplenie,
				'is_kover' => $request->is_kover,
				'is_kattle' => $request->is_kattle,
				'is_table' => $request->is_table,
				'is_sputniktv' => $request->is_sputniktv,
				'is_rosetka' => $request->is_rosetka,
				'is_kitchen' => $request->is_kitchen,
				'is_stiralka' => $request->is_stiralka,
				'is_holodilnik' => $request->is_holodilnik,
				'is_kofemachina' => $request->is_kofemachina,
				'is_mikrovolnovka' => $request->is_mikrovolnovka,
				'is_tarelki' => $request->is_tarelki,
				'is_posudomoika' => $request->is_posudomoika,
				'is_electrplitka' => $request->is_electrplitka,
				'is_obedennytable' => $request->is_obedennytable,
				'is_sofa' => $request->is_sofa,
				'is_gostugolok' => $request->is_gostugolok,
				'is_kamin' => $request->is_kamin,
				'is_terassa' => $request->is_terassa,
				'is_selfbasein' => $request->is_selfbasein,
			]);



			return redirect()->route('admin.room.home');
		}
	}






	#delete
	public function delete($id)
	{
		$room = Room::find($id);
		$old_avatar = $room->avatar;

		unlink($old_avatar);

		$room->delete();
		return redirect()->route('admin.room.home');
	}

	#others
}
