<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seriesGenre extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'seriesGenreID';
    protected $table = 'seriesGenres';

    protected $fillable = [
    	'videoID',
    	'genreID'
    ];
}
