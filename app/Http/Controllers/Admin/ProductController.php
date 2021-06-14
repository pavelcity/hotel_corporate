<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Image;

class ProductController extends Controller
{


	#index 
	public function index()
	{
		$products = Product::get();
		return view('admin.product.index', compact('products'));
	}



	#create
	public function create()
	{
		return view('admin.product.create');
	}




	#store
	public function store(Request $request)
	{
		$this->validate($request, [
			'title' => 'required',
			'short' => 'required',
			'price' => 'required',
			'avatar' => 'required|mimes:jpg,jpeg,png,svg',
			'descr' => 'required'
		], [
			'title.required' => 'обязательное поле',
			'short.required' => 'обязательное поле',
			'price.required' => 'Укажите цену',
			'avatar.required' => 'Загрузите фото номера',
			'avatar.mimes' => 'фото в формате jpg | jpeg | png | svg',
			'descr.required' => 'Напечатайте описание номер'
		]);


		$poduct = new Product;

		$avatar = $request->file('avatar');

		if ($avatar) {
			$name_gen = hexdec(uniqid()) . '.' . $avatar->getClientOriginalExtension();
			$last_avatar = 'uploads/nomera/' . $name_gen;
			Image::make($avatar)->resize(800, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nomera/' . $name_gen);

			$poduct->title = $request->title;
			$poduct->short = $request->short;

			$poduct->avatar = $last_avatar;

			$poduct->price = $request->price;
			$poduct->descr = $request->descr;
			$poduct->is_wifi = $request->is_wifi;
			$poduct->is_saife = $request->is_saife;
			$poduct->is_conditioner = $request->is_conditioner;
			$poduct->is_bar = $request->is_bar;
			$poduct->is_tv = $request->is_tv;
			$poduct->is_garderob = $request->is_garderob;
			$poduct->is_utug = $request->is_utug;
			$poduct->is_gladilka = $request->is_gladilka;
			$poduct->is_otoplenie = $request->is_otoplenie;
			$poduct->is_kover = $request->is_kover;
			$poduct->is_kattle = $request->is_kattle;
			$poduct->is_table = $request->is_table;
			$poduct->is_sputniktv = $request->is_sputniktv;
			$poduct->is_rosetka = $request->is_rosetka;
			$poduct->is_kitchen = $request->is_kitchen;
			$poduct->is_stiralka = $request->is_stiralka;
			$poduct->is_holodilnik = $request->is_holodilnik;
			$poduct->is_kofemachina = $request->is_kofemachina;
			$poduct->is_mikrovolnovka = $request->is_mikrovolnovka;
			$poduct->is_tarelki = $request->is_tarelki;
			$poduct->is_posudomoika = $request->is_posudomoika;
			$poduct->is_electrplitka = $request->is_electrplitka;
			$poduct->is_obedennytable = $request->is_obedennytable;
			$poduct->is_sofa = $request->is_sofa;
			$poduct->is_gostugolok = $request->is_gostugolok;
			$poduct->is_kamin = $request->is_kamin;
			$poduct->is_terassa = $request->is_terassa;
			$poduct->is_selfbasein = $request->is_selfbasein;


			$poduct->save();

			return redirect()->route('admin.product.home');
		} else {
			$poduct->title = $request->title;
			$poduct->short = $request->short;
			$poduct->price = $request->price;
			$poduct->descr = $request->descr;
			$poduct->is_wifi = $request->is_wifi;
			$poduct->is_saife = $request->is_saife;
			$poduct->is_conditioner = $request->is_conditioner;
			$poduct->is_bar = $request->is_bar;
			$poduct->is_tv = $request->is_tv;
			$poduct->is_garderob = $request->is_garderob;
			$poduct->is_utug = $request->is_utug;
			$poduct->is_gladilka = $request->is_gladilka;
			$poduct->is_otoplenie = $request->is_otoplenie;
			$poduct->is_kover = $request->is_kover;
			$poduct->is_kattle = $request->is_kattle;
			$poduct->is_table = $request->is_table;
			$poduct->is_sputniktv = $request->is_sputniktv;
			$poduct->is_rosetka = $request->is_rosetka;
			$poduct->is_kitchen = $request->is_kitchen;
			$poduct->is_stiralka = $request->is_stiralka;
			$poduct->is_holodilnik = $request->is_holodilnik;
			$poduct->is_kofemachina = $request->is_kofemachina;
			$poduct->is_mikrovolnovka = $request->is_mikrovolnovka;
			$poduct->is_tarelki = $request->is_tarelki;
			$poduct->is_posudomoika = $request->is_posudomoika;
			$poduct->is_electrplitka = $request->is_electrplitka;
			$poduct->is_obedennytable = $request->is_obedennytable;
			$poduct->is_sofa = $request->is_sofa;
			$poduct->is_gostugolok = $request->is_gostugolok;
			$poduct->is_kamin = $request->is_kamin;
			$poduct->is_terassa = $request->is_terassa;
			$poduct->is_selfbasein = $request->is_selfbasein;


			$poduct->save();

			return redirect()->route('admin.product.home');
		}
	}





	#edit
	public function edit($id)
	{
		$product = Product::find($id);
		return view('admin.product.edit', compact('product'));
	}






	#update
	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'title' => 'required',
			'short' => 'required',
		], [
			'title.required' => 'обязательное поле',
			'short.required' => 'обязательное поле',
		]);


		$poduct = Product::find($id);

		$avatar = $request->file('avatar');
		$old_avatar = $request->old_avatar;



		if ($avatar) {

			$name_gen = hexdec(uniqid()) . '.' . $avatar->getClientOriginalExtension();
			$last_avatar = 'uploads/nomera/' . $name_gen;
			Image::make($avatar)->resize(800, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nomera/' . $name_gen);

			if ($old_avatar) {
				unlink($old_avatar);
			}


			$poduct->update([
				'title' => $request->title,
				'short' => $request->short,

				'avatar' => $last_avatar,

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

			return redirect()->route('admin.product.home');
		} else {
			$poduct->update([
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

			return redirect()->route('admin.product.home');
		}
	}







	#delete
	public function delete($id)
	{
		$product = Product::find($id);

		$last_avatar = $product->avatar;
		if ($last_avatar) {
			unlink($last_avatar);
		}


		$product->delete();
		return redirect()->route('admin.product.home');
	}




	#
}
