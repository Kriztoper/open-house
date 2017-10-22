<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $fillable = ['tokenName', 'tokenValue','isActive'];
    public $timestamps = false;
    public function list_token(){
    	return $this->orderBy('tokenValue')
    				->get();
    }
}
