<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $fillable = ['seriesName', 'seriesDesc','thumbnail', 'fthumbnail'];
    public $timestamps = false;
}
