<?php namespace itinerary;

use Illuminate\Database\Eloquent\Model;

class Captain extends Model {

    protected $fillable = array('firstName','lastName', 'email', 'phone');

    public function leg(){
        return $this->belongsTo('Leg');
    }

    public function scopeLastNameAscending($query)
    {
        return $query->orderBy('lastName','ASC');
    }

}
