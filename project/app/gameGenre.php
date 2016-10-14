<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gameGenre extends Model
{
       /**
    * The database use by the model
    *
    * @var string
    */
    protected $table = 'gameGenres';
    /**
    *  The updated at and created at are not enabled
    *
    */
    public $timestamps = false;

}
