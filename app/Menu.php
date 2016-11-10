<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'TM_MENU';
    public $timestamps = false;

    function TR_Menu()
    {
    	return $this->belongTo('App\Modul');
    }
}
