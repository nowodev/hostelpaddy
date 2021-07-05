<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as ValidationRule;


class AgentProfileRequest extends FormRequest
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
        $agentID = $this->route('agent.id');
        return [
            'name' => 'sometimes',
            'email' => [
                'sometimes',
                'unique:students,email',
                'unique:users,email',
                ValidationRule::unique('agents')->ignore($agentID),
            ],
            'phone' => 'sometimes',
            'password' => 'min:6|sometimes',
        ];
    }
}