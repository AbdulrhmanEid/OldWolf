<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnitStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'type'=>'required|string| ',
            'status'=>'required|string|',
            'number_badrooms'=>'required|numeric|',
            'number_bathrooms'=>'required|numeric|',
            'area'=>'required|string|',
            'image'=>'required|mimes:png,jpg,jpeg,svg|',
            'unit_code'=>'required|unique:units',

        ];
    }
}


