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
            'name' => 'required|string|unique:restaurants',
            'description' => 'required|string|min:15',
            'picture' => 'required|string',
            'note' => 'required|int',
            'phoneNumber' => 'requiredLint|max:20',
            'location' => 'required|string|max:255',
            'websiteURL' => 'required|string',
        ];
    }
}
