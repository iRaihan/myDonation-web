<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class All_cause extends Model
{
    protected $fillable = [
        'title','discription','division','target','alart','status','image'
    ];
}
