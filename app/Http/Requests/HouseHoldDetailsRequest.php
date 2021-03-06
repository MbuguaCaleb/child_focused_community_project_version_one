<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HouseHoldDetailsRequest extends FormRequest
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
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'description' => 'required',
            'house_id' => 'required'
        ];
    }
}
