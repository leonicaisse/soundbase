<?php

namespace App;

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
        'name', 'email', 'password', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function chansons()
    {
        return $this->hasMany('App\Chanson', 'utilisateur_id');
    }

    public function ilsMeSuivent()
    {
        return $this->belongsToMany('App\User', 'suit', 'suivi_id', 'suiveur_id');
    }

    public function jeLesSuis()
    {
        return $this->belongsToMany('App\User', 'suit', 'suiveur_id', 'suivi_id');
    }
}
