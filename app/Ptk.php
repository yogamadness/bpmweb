<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ptk extends Model
{
    protected $table = 'TR_PTK';
    protected $primaryKey = 'doc_code';
    public $incrementing = false;
    protected $fillable = ['doc_code', 'level_jbt', 'ba_code', 'department', 'number_of_needs', 'head', 'request_date', 'needs_date', 'skill', 'emp_status', 'facult', 'gender', 'last_education', '', 'created_at', 'updated_at'];
}
