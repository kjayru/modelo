<?php

namespace App;



use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, ShinobiTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function navigation(){
        dd(auth()->user()->roles);
        return auth()->check() ? auth()->user()->roles[0]->slug : 'guest';
    }
    public function scort(){
        return $this->hasOne('App\Scort');
    }

    public function client(){
        return $this->hasOne('App\Client');
    }

    public function conversations(){
        return $this->hasMany('App\Conversation');
    }
    

}

