<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeriesGenre extends Model
{
    protected $fillable = ['videoID', 'genreID'];
    public $timestamps = false;
    public $table ='seriesgenres';
}
