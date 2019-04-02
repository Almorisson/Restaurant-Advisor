<?php

namespace App\Http\Resources;

use App\User;
use Illuminate\Http\Resources\Json\Resource;

class RestaurantCollection extends Resource
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
            'name' => $this->name,
            'note' => User::sum('userNote'),
            //'Rating' => ($this->count() > 0 || $this->sum('users.note') == 0 ) ? $this->sum('userNote') / $this->users->count() : "This restaurant has not a review yet.",
            'href' => route('restaurants.show', $this->id)
        ];
    }
}
