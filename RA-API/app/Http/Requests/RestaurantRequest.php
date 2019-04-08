<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'unique:restaurants',
            'description' => 'string|min:15',
            'picture' => 'string',
            'note' => 'int',
            'phoneNumber' => 'int|max:15',
            'composition' => 'string|max:10',
            'price' => '    int'
        ];
    }
}
