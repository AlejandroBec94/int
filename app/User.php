<?php

namespace Intranet;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        "DocDate",
        'UserName',
        'UserLastName',
        'UserEmail',
        "UserJobTitle",
        "UserCountry",
        "UserArea",
        "UserRegional",
        "UserPhotoID",
        "UserSkype",
        "UserPhone",
        "UserBorn",
        "UserSex",
        "UserChief",
        "password",
        "PasswordAltern"

    ];

    protected $primaryKey = 'UserID';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }
}