<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable

class UserSocial extends Model
{
    
    use SoftDeletes;
    use notifiable;

    public        $timestamp  = true  ;
    protected     $table      = 'uses';
    protected     $fillable   = ['user_id','social_network','social_id','social_email','socail_avatar'];
    protected     $hidden     = [];

}
