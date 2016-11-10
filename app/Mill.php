<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mill extends Model
{
    protected $table = 'TR_PTK_MIL_DETAIL';
    protected $guarded = ['ID'];
    public $incrementing = false;
}
