<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = ['title', 'tag_id'];
    public $timestamps = false;
    public $table = 'forums';
}
