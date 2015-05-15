<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAircraftPassengerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aircraft_passenger', function(Blueprint $table)
		{
			$table->integer('aircraft_id')->unsigned()->nullable();
            $table->foreign('aircraft_id')->references('id')
                ->on('aircrafts')->onDelete('cascade');

            $table->integer('passenger_id')->unsigned()->nullable();
            $table->foreign('passenger_id')->references('id')
                ->on('passengers')->onDelete('cascade');

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
		Schema::drop('aircraft_passenger');
	}

}
