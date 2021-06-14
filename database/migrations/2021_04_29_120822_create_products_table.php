<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function (Blueprint $table) {
			$table->id();
			$table->string('title');
			$table->string('slug')->nullable();
			$table->string('avatar')->nullable();
			$table->text('short')->nullable();
			$table->string('price')->nullable();
			$table->string('pics')->nullable();
			$table->text('descr')->nullable();
			$table->integer('is_wifi')->nullable();
			$table->integer('is_saife')->nullable();
			$table->integer('is_conditioner')->nullable();
			$table->integer('is_bar')->nullable();
			$table->integer('is_tv')->nullable();
			$table->integer('is_garderob')->nullable();
			$table->integer('is_utug')->nullable();
			$table->integer('is_gladilka')->nullable();
			$table->integer('is_otoplenie')->nullable();
			$table->integer('is_kover')->nullable();
			$table->integer('is_kattle')->nullable();
			$table->integer('is_table')->nullable();
			$table->integer('is_sputniktv')->nullable();
			$table->integer('is_rosetka')->nullable();
			$table->integer('is_kitchen')->nullable();
			$table->integer('is_stiralka')->nullable();
			$table->integer('is_holodilnik')->nullable();
			$table->integer('is_kofemachina')->nullable();
			$table->integer('is_mikrovolnovka')->nullable();
			$table->integer('is_tarelki')->nullable();
			$table->integer('is_posudomoika')->nullable();
			$table->integer('is_electrplitka')->nullable();
			$table->integer('is_obedennytable')->nullable();
			$table->integer('is_sofa')->nullable();
			$table->integer('is_gostugolok')->nullable();
			$table->integer('is_kamin')->nullable();
			$table->integer('is_terassa')->nullable();
			$table->integer('is_selfbasein')->nullable();
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
		Schema::dropIfExists('products');
	}
}
