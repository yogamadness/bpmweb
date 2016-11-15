<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'TR_FILE_GLOBAL';
    protected $primaryKey = 'file_id';
    protected $fillable = ['file_id', 'blob_content', 'doc_code', 'doc_size', 'file_name', 'mime_type', 'file_category'];
}
