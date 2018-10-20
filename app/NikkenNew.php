<?php

namespace Intranet;

use Illuminate\Database\Eloquent\Model;

class NikkenNew extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'DocEntry';
    protected $fillable =
        [
            'FileID',
            'Url',
            'FileType',
            'Cancelled',
            'CancelledInfo',
        ];
}
