<?php namespace itinerary;

use Illuminate\Database\Eloquent\Model;

class Leg extends Model {

    protected $fillable = array('itineraryID','aircraftID', 'captID', 'depAirport', 'depDate', 'depTime', 'depFBOID', 'passengerID', 'arrAirport', 'arrDate', 'arrTime', 'arrFBOID', 'legNotes');

	public function itinerary(){
        return $this->belongsTo('Itinerary');
    }

    public function aircraft(){
        return $this->hasMany('Aircraft');
    }

    public function captain(){
        return $this->hasMany('Captain');
    }

    public function fbo(){
        return $this->hasMany('Fbo');
    }

    public function passenger(){
        return $this->hasMany('Passenger');
    }

}
