<?php namespace itinerary;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model {

    protected $fillable = array('firstName','lastName', 'email', 'publicNotes', 'privateNotes');

    public function leg(){
        return $this->belongsTo('Leg');
    }

}
