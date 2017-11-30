<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = ['title', 'tag_id', 'num_comments'];
    public $timestamps = true;
    public $table = 'forums';
}
