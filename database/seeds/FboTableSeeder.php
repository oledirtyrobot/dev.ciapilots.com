<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use itinerary\Fbo;

class FboTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        Fbo::create([
            'airportID'  =>  'KPHX',
            'fboName'  =>  'Private Hangar (Jet)',
            'fboDetails'  =>  '3705 E. Airlane, Phoenix, AZ, 85034'
        ]);
        Fbo::create([
            'airportID'  =>  'KPHX',
            'fboName'  =>  'Private Hangar (PC12)',
            'fboDetails'  =>  '3709 E. Airlane, Phoenix, AZ, 85034'
        ]);
        Fbo::create([
            'airportID'  =>  'KICT',
            'fboName'  =>  'Signature Aviation',
            'fboDetails'  =>  '1980 S. Airport Road, Wichita, Kansas 67209, Phone: 316-522-2010'
        ]);
        Fbo::create([
            'airportID'  =>  'KEGE',
            'fboName'  =>  'Vail Valley Jet Center',
            'fboDetails'  =>  '0871 Cooley Mesa Rd, Gypsum, CO 81637-9706'
        ]);


    }

}
