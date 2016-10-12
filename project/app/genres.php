<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genres extends Model
{
   public $timestamps = false;

    protected $table = 'genres';

    protected $fillable = [
    	'genreName',
    	'genreDesc'
    ];
}
