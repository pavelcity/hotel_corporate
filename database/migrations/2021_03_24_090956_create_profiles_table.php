<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function (Blueprint $table) {
			$table->id();
			$table->string('title');
			$table->string('slug')->unique();
			$table->text('subtitle')->nullable();
			$table->string('phone')->nullable();
			$table->string('phonetwo')->nullable();
			$table->string('phonefortelegram')->nullable();
			$table->string('baner')->nullable();
			$table->string('avatar')->nullable();
			$table->string('logo')->nullable();
			$table->string('email')->nullable();
			$table->text('adress')->nullable();
			$table->text('usloviabrony')->nullable();
			$table->text('politics')->nullable();
			$table->text('map')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('profiles');
	}
}
