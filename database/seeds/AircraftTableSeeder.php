<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use itinerary\Aircraft;

class AircraftTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        Aircraft::create([
            'tailNumber'  =>  'N975BD'
        ]);
        Aircraft::create([
            'tailNumber'  =>  'N929SS'
        ]);
        Aircraft::create([
            'tailNumber'  =>  'N418DR'
        ]);
	}

}
