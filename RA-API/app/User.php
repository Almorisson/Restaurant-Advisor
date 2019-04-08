<?php

namespace App;

use App\Model\Menu;
use App\Model\Restaurant;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'username', 'password', 'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAllUsers() {

        return $this::all();
    }

    public function restaurants() {

        return $this->belongsToMany(Restaurant::class);
    }

    public function menus() {

        return $this->belongsToMany(Menu::class);
    }

}
