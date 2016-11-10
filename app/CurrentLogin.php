<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrentLogin extends Model
{
    protected $table = 'TR_CURRENT_LOGIN';
    public $timestamps = false;
    protected $fillable = ['USER_ID','SESSION_ID'];
    protected $guarded = ['ID'];
}
