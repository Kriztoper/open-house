<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class videos extends Model
{
	// no updated at...
    public $timestamps = false;

    protected $table = 'videos';
}
