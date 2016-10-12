<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class series extends Model
{
  public $timestamps = false;

    protected $table = 'series';

    protected $fillable = [
    	'seriesName',
    	'seriesDesc',
        'thumbnail'
    ];
}
