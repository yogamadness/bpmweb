<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class DemosiDetail extends Model
{
    protected $table = 'tr_hc_pdm_d';

    protected $primaryKey = 'detail_id';
	public $timestamps = false;
}
