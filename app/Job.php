<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'TR_WORKFLOW_JOB';
    public $timestamps = false;

	public function TR_Users()
    {
    	return $this->belongsTo('App\TR_Users');
    }

    // public function Role()
    // {
    // 	return $this->hasMany('App\Role');
    // }
}
