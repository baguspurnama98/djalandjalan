<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "user";
    protected $guarded = ['id'];

    public function trip(){
        return $this->hasMany('App\Trip');
    }

    //* Merubah Password Field Default
    // public function getAuthPassword()
    // {
    //     $this->namapasswordfieldelucok;
    // }
}
