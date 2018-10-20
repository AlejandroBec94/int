<?php

namespace Intranet;

use Illuminate\Database\Eloquent\Model;

class DashboardUser extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'UserID';
    protected $fillable =
        [
            'UserID',
            'UserDashboardSorted',
            'UserConfig',
            'LastUpdate',
        ];
}
