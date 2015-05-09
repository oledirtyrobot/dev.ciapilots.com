<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassengersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('passengers', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->text('publicNotes');
            $table->text('privateNotes');
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
		Schema::drop('passengers');
	}

}
