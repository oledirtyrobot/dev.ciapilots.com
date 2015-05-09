<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('legs', function(Blueprint $table)
		{
			$table->increments('id');

            $table->integer('itineraryID')->unsigned();
            $table->foreign('itineraryID')->references('id')
                  ->on('itineraries')->onDelete('cascade');

            $table->integer('aircraftID');
            $table->foreign('aircraftID')->references('id')
                ->on('aircrafts');

            $table->integer('captID');
            $table->foreign('captID')->references('id')
                ->on('captains');

            $table->string('depAirport');
            $table->date('depDate');
            $table->string('depTime');

            $table->integer('depFBOID');
            $table->foreign('depFBOID')->references('id')
                ->on('fbos');

            $table->integer('passengerID');
            $table->foreign('passengerID')->references('id')
                ->on('passengers');

            $table->string('arrAirport');
            $table->date('arrDate');
            $table->string('arrTime');

            $table->integer('arrFBOID');
            $table->foreign('arrFBOID')->references('id')
                ->on('fbos');

            $table->string('legNotes');

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
		Schema::drop('legs');
	}

}
