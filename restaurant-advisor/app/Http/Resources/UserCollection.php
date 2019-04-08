<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class UserCollection extends Resource
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
            'href' => [
                'link' => route('users.show', $this->id)
            ],
            'Go Back' => [
                'Back' => route('users.index')
            ]

        ];
    }
}
