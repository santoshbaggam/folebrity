<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCelebritiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('celebrities', function(Blueprint $table)
		{
            $table->bigInteger('id', false, true)->primary();
            $table->string('twitter_handle', 25)->unique();
            $table->string('name', 30);
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
		Schema::drop('celebrities');
	}

}
