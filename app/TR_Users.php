<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TR_Users extends Model
{
    protected $table = 'TR_USER';
    protected $primaryKey = 'USER_ID';
    public $incrementing = false;
    public $timestamps = false;   
}
