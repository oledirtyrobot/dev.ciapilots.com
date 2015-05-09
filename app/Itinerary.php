<?php namespace itinerary;

use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model {

    protected $fillable = array('name','leadPassengerID');

	public function legs(){
        return $this->hasMany('Legs');
}

}
