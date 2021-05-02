<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class HostelRequest extends FormRequest
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
        $hostelID = $this->route('hostel.id');
        return [
            'hostel_name' => [
                'required',
                Rule::unique('hostels')->ignore($hostelID),
            ],
            'address' => 'required',
            'state' => 'required',
            'city' => 'required',
            'property' => 'required',
            'roomNum' => 'required',
            'amount' => 'required',
            'period' => 'required',
//            'amenities' => 'required',
//            'utilities' => 'required',
//            'rules' => 'required',
            'tenantType' => 'required',
            'image' => 'sometimes|mimes:png,jpg,jpeg',
        ];
    }

    public function messages()
    {
        return [
            'hostel_name.required' => 'The Hostel name is required.',
            'hostel_name.unique'   => 'The Hostel name exists, choose a new name.',

            'address.required' => 'The Hostel address is required.',
            'state.required' => 'The State is required.',
            'city.required' => 'The City is required.',
            'property.required' => 'The Type of Hostel is required.',
            'roomNum.required' => 'The Number of Room(s) is/are required.',
            'amount.required' => 'The Amount is required.',
            'period.required' => 'The Rent Period is required.',
            'tenantType.required' => 'The Tenant Type is required.',

            'amenities.required' => 'The Amenities are required.',
            'utilities.required' => 'The Utilities are required.',
            'rules.required' => 'The Rules are required.',
        ];
    }
}
