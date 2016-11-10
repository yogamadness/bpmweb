<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'TR_WORKFLOW_DETAIL';
    public $timestamps = false;

    public function Job(){
		return $this->belongTo('App\Job', 'ID_WORKFLOW_DETAIL');	
	}

	public function Modul(){
		return $this->hasMany('App\Modul', 'WORKFLOW_DETAIL_CODE');	
	}
}
