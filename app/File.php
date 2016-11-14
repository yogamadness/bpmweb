<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'TR_FILE';
    protected $primaryKey = 'file_id';
    public $incrementing = false;
    protected $guarded = ['file_id'];
    public $timestamps = false;
}
