<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCelebrityDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('celebrity_details', function(Blueprint $table)
        {
            $table->increments('id');
            $table->bigInteger('celebrity_id')->unsigned();
            $table->enum('gender', ['Male', 'Female']);
            $table->integer('country_id')->unsigned();

            $table->foreign('celebrity_id')->references('id')->on('celebrities')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('countries')->onUpdate('cascade')->onDelete('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('celebrity_details');
	}

}
