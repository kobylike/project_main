<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class registered_User extends Authenticatable
{


    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'registered_User';
    protected $table='registered_users';
    protected $primaryKey='id';
    protected $fillable = [
        'name',
        'email',
        'password',
        'status'
    ];
}
