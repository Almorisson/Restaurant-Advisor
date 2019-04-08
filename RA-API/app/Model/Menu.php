<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name', 'description', 'picture', 'menuNote', 'price', 'composition'
    ];

    public function restaurant() {

        return $this->belongsTo(Restaurant::class);
    }

    public function users() {

        return $this->hasMany(User::class);
    }
}
