<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use SoftDeletes;
    use notifiable;

    public        $timestamp  = true  ;
    protected     $table      = 'uses';
    protected     $fillable   = ['cpf','name','phone','birt','gender','notes','email','password','status','permission'];
    protected     $hidden     = ['password','remember_token'];

}
