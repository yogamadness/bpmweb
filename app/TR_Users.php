<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TR_Users extends Model
{
    protected $table = 'TR_USER';
    public $timestamps = false;

    public function job()
    {
    	return $this->hasMany('App\Job', 'job_code');
    }
}
