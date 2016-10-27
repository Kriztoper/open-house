<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['videoName', 'videoDesc','videoURL'];
    public $timestamps = false;
    protected $table = 'videos';
}
