<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCelebrityDomainTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('celebrity_domain', function(Blueprint $table)
		{
            $table->increments('id');
            $table->bigInteger('celebrity_id')->unsigned();
            $table->integer('domain_id')->unsigned();

            $table->foreign('celebrity_id')->references('id')->on('celebrities')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('domain_id')->references('id')->on('domains')->onUpdate('cascade')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('celebrity_domain');
	}

}
