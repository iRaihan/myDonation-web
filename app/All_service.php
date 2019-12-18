<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class All_service extends Model
{
    protected $fillable = [
        'service_title','service_discription','service_category','target','alart','status','image'
    ];
}
