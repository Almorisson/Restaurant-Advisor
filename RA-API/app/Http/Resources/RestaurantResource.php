<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RestaurantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description'=> $this->description,
            'note' => $this->note,
            'location' => $this->location,
            'websiteURL' => $this->websiteURL,
            'href' => [

                'link' => route('menus.index', $this->id)
            ],

            'back' => [
                'Go back' =>  "Back to All Restaurants list",
                'link' => route('restaurants.index')
            ],
        ];
    }
}
