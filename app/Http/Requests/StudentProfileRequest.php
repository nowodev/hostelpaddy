<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as ValidationRule;

class StudentProfileRequest extends FormRequest
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
	        $studentID = $this->route('student.id');
	    return [
		    'name' => 'sometimes',
		    'email' => [
			    'sometimes',
			    'unique:agents,email',
			    'unique:users,email',
			    ValidationRule::unique('students')->ignore($studentID),
		    ],
		    'phone' => 'sometimes',
            'password' => 'min:6|sometimes'
        ];
    }
}