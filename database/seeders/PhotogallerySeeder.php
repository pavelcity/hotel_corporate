<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PhotogallerySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('photogalleries')->insert(
			[
				[
					'title' => 'Первое фото',
					'pic' => 'img/resort/01.jpg'
				],
				[
					'title' => 'Фото номер два',
					'pic' => 'img/resort/02.jpg'
				],
				[
					'title' => 'Третья фотография',
					'pic' => 'img/resort/03.jpg'
				],
				[
					'title' => 'Фото номер четыре',
					'pic' => 'img/resort/04.jpg'
				]
			]
		);
	}
}
