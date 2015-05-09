<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use itinerary\Passenger;

class PassengerTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        Passenger::create([
            'firstName'  =>  'Dody',
            'lastName'  =>  'Pitre',
            'email'  =>  'dody@testdata.com',
            'publicNotes'  =>  '',
            'privateNotes'  =>  '12 oz. Diet Coke for each leg, portable step'
        ]);
        Passenger::create([
            'firstName'  =>  'Andy',
            'lastName'  =>  'Goulder',
            'email'  =>  'andy@testdata.com',
            'publicNotes'  =>  'Andy and Charlie',
            'privateNotes'  =>  ''
        ]);
        Passenger::create([
            'firstName'  =>  'Joe',
            'lastName'  =>  'Moeller',
            'email'  =>  'moeman@testdata.com',
            'publicNotes'  =>  'Joe and Mary',
            'privateNotes'  =>  'Joe likes chocolate snacks.'
        ]);
	}

}
