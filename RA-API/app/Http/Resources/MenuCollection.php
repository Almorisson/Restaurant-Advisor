<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class MenuCollection extends Resource
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
            'description' => $this->description,
            'price' => $this->price,
            'picture' => $this->picture,
            'href' => [
                'link' => route('menus.show', [$this->restaurant->id, $this->id])
            ],


            'back' => [
                'Go back' =>  "Back to All Restaurants list",
                'link' => route('restaurants.show', [$this->restaurant->id])
            ]

        ];
    }
}
