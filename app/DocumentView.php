<?php

namespace Intranet;

use Illuminate\Database\Eloquent\Model;

class DocumentView extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'FileID';
    protected $fillable =
        [
            'DocDate',
            'CallerID',
            'CallerModule',
            'FileName',
            'FilePath',
            'Cancelled',
            'CancelledInfo',
        ];
}
