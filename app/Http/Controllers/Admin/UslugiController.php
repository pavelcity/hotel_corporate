<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Uslugi;

class UslugiController extends Controller
{

	public function index()
	{
		$uslugis = Uslugi::all();
		return view('admin.uslugi.index', compact('uslugis'));
	}




	#create
	public function create()
	{
		return view('admin.uslugi.create');
	}




	#store 
	public function store(Request $request)
	{
		$this->validate($request, [
			'title' => 'required',
			'descr' => 'required',
		], [
			'title.required' => 'Обязательное поле',
			'descr.required' => 'Обязательное поле',
		]);

		$usluga = new Uslugi;

		$usluga->title = $request->title;
		$usluga->descr = $request->descr;
		$usluga->save();

		return redirect()->route('admin.uslugi.home');
	}









	#edit
	public function edit($id)
	{
		$usluga = Uslugi::find($id);
		return view('admin.uslugi.edit', compact('usluga'));
	}









	#update 
	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'title' => 'required',
			'descr' => 'required',
		], [
			'title.required' => 'Обязательное поле',
			'descr.required' => 'Обязательное поле',
		]);

		$usluga = Uslugi::find($id);

		$usluga->update([
			'title' => $request->title,
			'descr' => $request->descr,
		]);

		return redirect()->route('admin.uslugi.home');
	}









	#delete
	public function delete($id)
	{
		$usluga = Uslugi::find($id);
		$usluga->delete();
		return redirect()->route('admin.uslugi.home');
	}





	#others

}
