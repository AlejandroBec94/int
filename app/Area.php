<?php

namespace Intranet;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'AreaID';
    protected $fillable = ['AreaName', 'AreaAcronym', 'AreaPermissions'];
}