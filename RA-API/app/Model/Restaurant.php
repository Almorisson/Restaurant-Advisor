<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'name', 'description', 'picture', 'note', 'location', 'phoneNumber', 'websiteURL'
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function users() {

        return $this->hasMany(User::class);
    }

}
