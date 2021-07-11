<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreferenceRequest extends FormRequest
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
            'location' => 'required',
            'property_type' => 'required',
            'no_of_rooms' => 'required',
            'rent_period' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'location.required' => 'The Location is required.',
            'property_type.required' => 'The Property Type is required.',
            'no_of_rooms.required' => 'The number of Rooms are required.',
            'rent_period.required' => 'The Rent Period is required.',
        ];
    }
}