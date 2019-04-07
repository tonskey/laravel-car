<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CarFormRequest extends Request
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
            'model' => 'required',
            'marka' => 'required',
            'year' => 'required',
            'body_type' => 'required',
            'capacity' => 'required',
            'color' => 'required',
            'price' => 'required',
        ];
    }
}
