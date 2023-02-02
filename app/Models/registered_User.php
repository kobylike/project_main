<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class registered_User extends Authenticatable
{


    use Notifiable;
    protected $table='registered__users';
    protected $primaryKey='id';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
