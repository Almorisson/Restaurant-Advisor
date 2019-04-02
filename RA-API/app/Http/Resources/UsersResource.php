<?php

namespace App\Http\Resources;

use App\Model\Menu;
use App\Model\Restaurant;
use Illuminate\Http\Resources\Json\Resource;

class UsersResource extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

            'name' => $this->firstName. ' '. $this->lastName,
            'username' => $this->username,
            'age' => $this->age,
            'email' => $this->email,
            //'userRestaurants' => Restaurant::with('users')->get(['name']),
            //'userMenus' => Menu::with('users')->getAttribute('name')

        ];
    }
}
