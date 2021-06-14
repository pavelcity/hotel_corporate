<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderutpsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orderutps', function (Blueprint $table) {
			$table->id();
			$table->string('dateenter')->nullable();
			$table->string('dateout')->nullable();
			$table->string('adult')->nullable();
			$table->string('children')->nullable();
			$table->string('name')->nullable();
			$table->string('phone')->nullable();
			$table->string('nomer')->nullable();
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
		Schema::dropIfExists('orderutps');
	}
}
