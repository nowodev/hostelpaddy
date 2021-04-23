<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HostelListingRequest extends FormRequest
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
            'hostel_name' => 'required',
            'address' => 'required',
            'state' => 'required',
            'city' => 'required',
            'property' => 'required',
            'roomNum' => 'required',
            'amount' => 'required',
            'period' => 'required',
            'amenities' => 'required',
            'utilities' => 'required',
            'rules' => 'required',
            'tenantType' => 'required',
            'image_name' => 'sometimes|mimes:png,jpg,jpeg',
        ];
    }
}
