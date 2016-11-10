<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ProcessStatusHistory extends Model
{
    protected $table = 'tr_hc_proc_stat_hist';

    protected $primaryKey = 'stat_hist_id';
	public $timestamps = false;
}
