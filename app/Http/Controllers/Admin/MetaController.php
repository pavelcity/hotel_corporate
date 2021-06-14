<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meta;

class MetaController extends Controller
{


	public function index()
	{
		$metas = Meta::all();
		return view('admin.meta.index', compact('metas'));
	}




	#create
	public function create()
	{
		return view('admin.meta.create');
	}





	#store 
	public function store(Request $request)
	{
		$this->validate($request, [
			'keywords' => 'required',
			'description' => 'required',
			'author' => 'required',
			'ogtitle' => 'required',
		], [
			'keywords.required' => 'стоп стоп стоп, а как продвигать сайт без ключевых слов?',
			'description.required' => 'и без описания тоже seo будет не очень (((',
			'author.required' => 'автор',
			'ogtitle.required' => 'og:title',
		]);

		$meta = new Meta;

		$meta->keywords = $request->keywords;
		$meta->description = $request->description;
		$meta->author = $request->author;
		$meta->ogtitle = $request->ogtitle;

		$meta->save();

		return redirect()->route('admin.meta.home');
	}





	#edit
	public function edit($id)
	{
		$meta = Meta::find($id);
		return view('admin.meta.edit', compact('meta'));
	}





	#update
	public function update(Request $request, $id)
	{

		$this->validate($request, [
			'keywords' => 'required',
			'description' => 'required',
			'author' => 'required',
			'ogtitle' => 'required',
		], [
			'keywords.required' => 'стоп стоп стоп, а как продвигать сайт без ключевых слов?',
			'description.required' => 'и без описания тоже seo будет не очень (((',
			'author.required' => 'автор',
			'ogtitle.required' => 'og:title',
		]);

		$meta = Meta::find($id);

		$meta->update([
			'keywords' => $request->keywords,
			'description' => $request->description,
			'author' => $request->author,
			'ogtitle' => $request->ogtitle
		]);

		return redirect()->route('admin.meta.home');
	}





	#delete
	public function delete($id)
	{
		Meta::find($id)->delete();
		return redirect()->route('admin.meta.home');
	}

	#others
}
