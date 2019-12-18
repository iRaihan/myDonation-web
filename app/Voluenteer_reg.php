<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluenteer_reg extends Model
{
    protected $fillable = [
        'first_name','last_name','email','phone','nid_bid','profession','organization','image'
    ];
}
