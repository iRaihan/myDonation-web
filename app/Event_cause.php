<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event_cause extends Model
{
    protected $fillable = [
        'ser_id','cas_id','e_date','e_time','e_place','event_status'
    ];
}
