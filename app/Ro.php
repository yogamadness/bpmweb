<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ro extends Model
{
    protected $table = 'TR_PTK_RO';
    protected $guarded = ['ID'];
    public $incrementing = false;
    public $timestamps = false;
}
