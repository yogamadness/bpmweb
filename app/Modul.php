<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    protected $table = 'TM_MODULE';
    public $timestamps = false;

    public function TR_Menu()
    {
    	return $this->hasMany('App\Menu');
    }

    public function Role()
    {
    	return $this->hasMany('App\Role');
    }
}
