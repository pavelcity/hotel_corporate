<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FeaturesSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('features')->insert([
			[
				'title' => '8 лет на рынке',
				'descr' => 'В гостиничном бизнесе мы уже не первый год. Поверьте, отдых у нас будет не забываемым!',
				'pic' => 'img/01_1.svg'
			],
			[
				'title' => 'До моря 250м',
				'descr' => 'Поход на пляж не будет утомительным, пару минут и вы уже там :)',
				'pic' => 'img/01_2.svg'
			],
			[
				'title' => 'Трансфер',
				'descr' => 'Как добраться до нашего отеля? Не волнуйтесь. Наш комфортабельный микроавтобус заберет вас',
				'pic' => 'img/01_3.svg'
			],
			[
				'title' => 'Бесплатный Wi-Fi',
				'descr' => 'На всей территории отеля для всех гостей бесплатный выход в интернет',
				'pic' => 'img/01_4.svg'
			],
			[
				'title' => 'Бассейн',
				'descr' => 'В любой момент вы сможете освежиться в нашем бассейне',
				'pic' => 'img/01_5.svg'
			],
			[
				'title' => 'Бесплатная парковка',
				'descr' => 'Вам не стоит волноваться где поставить автомобиль',
				'pic' => 'img/01_6.svg'
			]
		]);
	}
}
