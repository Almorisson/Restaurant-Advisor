<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use phpDocumentor\Reflection\Types\Parent_;

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
        return parent::toArray($request);

        /*return [
            'id' => $this->id,
            'name' => $this->name,
            'description'=> $this->description,
            'note' => $this->note,
            'location' => $this->location,
            'websiteURL' => $this->websiteURL,
            'href' => [

                'link' => route('menus', $this->id)
            ],

            'back' => [
                'Go back' =>  "Back to All Restaurants list",
                'link' => route('index')
            ],
        ];*/

    }
}
