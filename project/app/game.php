<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game extends Model
{
      /**
    * The database use by the model
    *
    * @var string
    */
    protected $table = 'games';
    /**
    *  The updated at and created at are not enabled
    *
    */
    public $timestamps = false;

    /**
    * The attributes excluded from the model's JSON form.
    *
    *@var array
    */
    protected $hidden = [];
}
