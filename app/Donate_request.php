<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate_request extends Model
{
    protected $fillable = [
        'status','transaction_id'
    ];
}
