<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameGenre extends Model
{
    public $table = 'gamegenres';
    protected $fillable = ['gameID', 'genreID'];
    public $timestamps = false;
}
