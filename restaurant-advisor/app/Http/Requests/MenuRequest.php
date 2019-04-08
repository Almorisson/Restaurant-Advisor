<?php

namespace App\Http\Requests;

use App\Http\Resources\MenuResource;
use App\Model\Menu;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MenuRequest extends FormRequest
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
            'price' => 'required|int|between:5,100',
            'menuNote' => 'int|between:0,5',
            'composition' => 'int|max:15'
        ];
    }
}
