<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class DemosiHeaderHistory extends Model
{
    protected $table = 'tr_hc_pdm_h_hist';

    protected $primaryKey = 'version_code';
	public $timestamps = false;
}
