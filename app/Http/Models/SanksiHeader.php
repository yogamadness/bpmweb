<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class SanksiHeader extends Model
{
    protected $table = 'tr_hc_pss_sp_h';

    protected $primaryKey = 'h_id';
    //protected $incrementing = false;
	public $timestamps = false;
}
