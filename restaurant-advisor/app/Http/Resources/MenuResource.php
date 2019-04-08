<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuResource extends JsonResource
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

            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'picture' => $this->picture,
            'composition' => $this->composition,
            'menuNote' => $this->menuNote,
            'href' => [
                'Go back' =>  "Back to All Menus",
                'link' => route('menus', $this->restaurant_id)
            ]

        ];
    }
}
