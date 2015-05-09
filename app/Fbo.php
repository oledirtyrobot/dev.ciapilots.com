<?php namespace itinerary;

use Illuminate\Database\Eloquent\Model;

class Fbo extends Model {

    protected $fillable = array('airportID','fboName', 'fboDetails');

    public function leg(){
        return $this->belongsTo('Leg');
    }

}
