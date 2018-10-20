<?php

namespace Intranet;

use Illuminate\Database\Eloquent\Model;

class RequestUsers extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'RequestID';
    protected $fillable =
        [
            'RequestUserID',
            'UserName',
            'MoveRequest',
            'TypePlace',
            'UserReplace',
            'UserEquipment',
            'UserJobTitle',
            'UserChiefID',
            'UserTools',
            'OtherTool',
            'RequestComment',
            'RequestDate',
            'RequestStatus',
        ];
}
