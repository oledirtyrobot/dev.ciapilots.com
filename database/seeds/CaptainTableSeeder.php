<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use itinerary\Captain;

class CaptainTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        Captain::create([
            'firstName'  =>  'Ryan',
            'lastName'  =>  'Richards',
            'email'  =>  'ryancrichards@gmail.com',
            'phone'  =>  '480-521-8145'
        ]);
        Captain::create([
            'firstName'  =>  'Scott',
            'lastName'  =>  'Lamoree',
            'email'  =>  'scott@testdata.com',
            'phone'  =>  '602-000-0000'
        ]);
        Captain::create([
            'firstName'  =>  'Brian',
            'lastName'  =>  'Haines',
            'email'  =>  'brian@testdata.com',
            'phone'  =>  '602-111-1111'
        ]);
	}

}
