<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
	protected $fillable = ['gameName', 'gameDesc', 'thumbnail', 'fthumbnail', 'className', 'isJar', 'gameURL','width', 'height'];
    public $timestamps = false;

    public function get_game($gameName){
    	return $this->where('gameName', $gameName)
    				->first();
    }
}
