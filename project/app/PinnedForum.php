<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PinnedForum extends Model
{
    protected $fillable = ['user_id', 'forum_id'];
    public $timestamps = false;
    public $table = 'pinned_forums';
}
