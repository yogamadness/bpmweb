<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'tr_setting';

    protected $primaryKey = 'h_id';
    //protected $incrementing = false;
	public $timestamps = false;
}
