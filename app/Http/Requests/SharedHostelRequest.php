<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SharedHostelRequest extends FormRequest
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
            'phone_number' => 'required',
            'level' => 'required',
            'institution' => 'required',
            'gender' => 'required',
            'amenities' => 'sometimes',
            'utilities' => 'sometimes',
            'choice' => 'required',
            'photos' => 'sometimes',
            'video' => 'sometimes',
        ];
    }

    public function messages()
    {
        return [
            'phone_number.required' => 'The Phone number is required.',
            'level.required' => 'The Level is required.',
            'institution.required' => 'The Institution of Rooms are required.',
            'gender.required' => 'The Gender Period is required.',
            'choice.required' => 'The Choice of hostel mate is required.',
        ];
    }
}