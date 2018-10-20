<?php

namespace Intranet;

use Illuminate\Database\Eloquent\Model;

class EmailMaster extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'EmailID';
    protected $fillable =
        [
            'DocDate',
            'LastUpdate',
            'Email',
            'MasterName'
        ];
}
