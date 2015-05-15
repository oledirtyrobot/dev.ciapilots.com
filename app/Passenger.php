<?php namespace itinerary;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model {

    protected $fillable = array('firstName','lastName', 'email', 'publicNotes', 'privateNotes');

    //public function leg(){
    //    return $this->belongsTo('Leg');
    //}

    public function aircraft(){
        return $this->belongsToMany('itinerary\Aircraft');
    }

    public function scopeLastNameAscending($query)
    {
        return $query->orderBy('lastName','ASC');
    }

    //get a list of aircraft ids associated with the current passenger
    public function getAircraftListAttribute(){
        return $this->aircraft->lists('id');
    }
}
