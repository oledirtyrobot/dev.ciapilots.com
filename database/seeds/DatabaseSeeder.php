<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        DB::table('captains')->delete();
        DB::table('aircrafts')->delete();
        DB::table('fbos')->delete();
        DB::table('passengers')->delete();
        DB::table('itineraries')->delete();
        DB::table('legs')->delete();

		// $this->call('UserTableSeeder');

        $this->call('CaptainTableSeeder');
        $this->call('AircraftTableSeeder');
        $this->call('FboTableSeeder');
        $this->call('PassengerTableSeeder');
        $this->call('LegTableSeeder');
        $this->call('ItineraryTableSeeder');
	}

}
