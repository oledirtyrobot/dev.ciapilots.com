<?php namespace itinerary;

use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model {

    protected $fillable = ['tailNumber'];

    public function leg(){
        return $this->belongsTo('Leg');
    }

}
