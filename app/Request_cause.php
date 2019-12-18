<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request_cause extends Model
{
    protected $fillable = [
        'title','discription','division','image','status'
    ];
}
