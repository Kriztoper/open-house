<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'forum_id'];
    public $timestamps = false;
    public $table = 'comments';
}
