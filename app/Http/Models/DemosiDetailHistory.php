<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class DemosiDetailHistory extends Model
{
    protected $table = 'tr_hc_pdm_d_hist';

    protected $primaryKey = 'd_hist_id';
	public $timestamps = false;
}
