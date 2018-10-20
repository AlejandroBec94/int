<?php

namespace Intranet;

use Illuminate\Database\Eloquent\Model;

class IntraLog extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'LogID';
    protected $fillable =
        [
            'LogDate',
            'LogIP',
            'LogUserID',
            'LogUserCountry',
            'LogCountry',
            'LogType',
        ];
}
