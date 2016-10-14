<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class token extends Model
{
    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'tokens';
    /**
    *  The updated at and created at are not enabled
    *
    */
    public $timestamps = false;
    /**
    * The attributes that are mass assignable.
    *
    *@var array
    */
    protected $fillable = ['tokenName', 'isActive'];

    /**
    * The attributes excluded from the model's JSON form.
    *
    *@var array
    */
    protected $hidden = [];
}
