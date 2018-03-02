<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'type_vs', 'flight_number', 'ak', 'ap_1', 'ap_2',
        'flight_date', 'time_departure', 'time_arrival',
        'check_in', 'gate', 'status_id'
    ];

    public function status(){
        return $this->belongsTo('App\Status', 'status_id');
    }
}
