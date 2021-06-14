<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MetaSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('metas')->insert([
			'keywords' => 'ключевые слова',
			'description' => 'описание',
			'author' => 'hotel resort',
			'ogtitle' => 'ogtitle text'
		]);
	}
}
