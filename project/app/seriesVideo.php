<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeriesVideo extends Model
{
    protected $fillable = ['seriesID', 'videoID'];
    public $timestamps = false;
    public $table ='seriesvideo';
}
