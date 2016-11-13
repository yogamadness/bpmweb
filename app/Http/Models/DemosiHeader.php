<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class DemosiHeader extends Model
{
    protected $table = 'tr_hc_pdm_h';

    protected $primaryKey = 'h_id';
    //protected $incrementing = false;
	public $timestamps = false;

    public function created_by_name()
    {
        return $this->belongsTo('App\TR_Users', 'created_by', 'user_id');
    }
}
