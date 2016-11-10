<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    protected $table = 'TR_PTK_ESTATE_DETAIL';
    protected $guarded = 'ID';
    public $incrementing = false;
}
