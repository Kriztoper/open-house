<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumTag extends Model
{
    protected $fillable = ['tag'];
    public $timestamps = false;
    public $table = 'forum_tags';
}
