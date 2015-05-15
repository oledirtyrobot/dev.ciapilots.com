<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use itinerary\Leg;

class LegTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        Leg::create([
            'itinerary_id'  =>  1,
            'aircraft_id'  =>  1,
            'capt_id'  =>  2,
            'depAirport'  =>  'KPHX',
            'depDate'  =>  '1/1/2020',
            'depTime'  =>  '01:00 PM',
            'depFBO_id'  =>  1,
            'passenger_id'  =>  2,
            'arrAirport'  =>  'KICT',
            'arrDate'  =>  '1/1/2020',
            'arrTime'  =>  '02:30 PM',
            'arrFBO_id'  =>  2,
            'legNotes' => 'This is a test leg and these are your leg notes.'
        ]);

	}

}
