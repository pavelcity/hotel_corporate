<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

	public function index()
	{
		$contacts = Contact::all();
		return view('admin.contact.index', compact('contacts'));
	}





	#create
	public function create()
	{
		return view('admin.contact.create');
	}





	#store
	public function store(Request $request)
	{
		$this->validate($request, [
			'title' => 'required',
			'descr' => 'required',
		], [
			'title.required' => 'обязательное поле',
			'descr.required' => 'обязательное поле',
		]);

		$contact = new Contact;

		$contact->title = $request->title;
		$contact->descr = $request->descr;
		$contact->save();

		return redirect()->route('admin.contact.home');
	}





	#edit
	public function edit($id)
	{
		$contact = Contact::find($id);
		return view('admin.contact.edit', compact('contact'));
	}




	#update 
	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'title' => 'required',
			'descr' => 'required',
		], [
			'title.required' => 'обязательное поле',
			'descr.required' => 'обязательное поле',
		]);

		$contact = Contact::find($id);

		$contact->update([
			'title' => $request->title,
			'descr' => $request->descr
		]);




		return redirect()->route('admin.contact.home');
	}

	#others
}
