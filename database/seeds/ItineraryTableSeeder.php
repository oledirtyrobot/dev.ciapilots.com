<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use itinerary\Itinerary;

class ItineraryTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        Itinerary::create([
            'leadPassenger_id'  =>  3,
            'name'  =>  'My upcoming Trip: '
        ]);

	}

}
