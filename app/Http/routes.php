<?php

/*
|--------------------------------------------------------------------------
| ATTENTION:  BLADE TEMPLATE TAGS ARE RECONFIGURED TO NON-STANDARD
|--------------------------------------------------------------------------
|
| We are using AngularJS on the front end which uses the same {{ }} tags
| as Laravel Blade.  To avoid this conflict I have reconfigured Blade to
| use <% %> tags instead, allowing AngularJS to continue using {{ }}.
|
Currently not active...

Blade::setContentTags('<%', '%>');        // for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>');   // for escaped data
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');
Route::get('/', function()
{
    $passenger = \itinerary\Passenger::findOrFail(5);
    //$aircraft = Aircraft::lists('tailNumber', 'id');
    return $aircraft = $passenger->aircraft;
    //return View::make('angular-demo');
});

//jsonAircraft is a helper for the angular demo
Route::get('jsonAircraft', function(){
    return \itinerary\Aircraft::all();
});

/*
//jsonFBO is a helper for the angular demo
Route::get('fbos/{airportID?}', function($airportID = 'KPHX'){

    $airportFbos = itinerary\Fbo::where('airportID', '=', $airportID)->get();

    //return 'fbo: '.$airportFbos;
    return View::make('fbos.index')
        ->with('airportFbos', $airportFbos);
});
*/

//does the post for the angular demo
//Route::post('aircraft', function(){
//   return \itinerary\Aircraft::create(Input::all());
//});

Route::get('getFBO/{airportID}', 'FbosController@getFBO');

//getFBO is a helper for the angular demo
//Route::get('getFBO', function($airportID = 'KPHX'){

  //  return \itinerary\Fbo::where('airportID', '=', $airportID)->get();

//});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('captains',  'CaptainsController');
Route::resource('passengers',  'PassengersController');
Route::resource('aircraft',  'AircraftController');
Route::resource('fbos',  'FbosController');
Route::resource('legs',  'LegsController');
Route::resource('itineraries',  'ItinerariesController');
