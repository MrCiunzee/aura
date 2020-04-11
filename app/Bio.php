<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{
    //

    protected $fillable = [
        'PhoneNumber',
        'Faculty',
        'Level',
        'user_id'
    ];
}
