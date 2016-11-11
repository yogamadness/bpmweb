<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TR_Users extends Model
{
    protected $table = 'TR_USER';
    protected $primaryKey = 'user_id';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['user_id', 'area_code', 'nik', 'ref_role', 'job_code', 'email', 'nama', 'username'];   
}
