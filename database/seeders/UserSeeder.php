<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert([
			[
				'name' => 'suadmin',
				'email' => 'suadmin@a.ru',
				'password' => bcrypt('43214321')
			],
			[
				'name' => 'manager',
				'email' => 'manager@a.ru',
				'password' => bcrypt('12341234')
			]
		]);
	}
}
