<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
            'phonenumber' => ['required', 'string', 'max:15'],
            'date_of_birth' => ['required', 'date'],
            'skill_level' => ['required', 'integer', 'min:1'],
            'street' => ['required', 'string', 'max:255'],
            'housenumber' => ['required', 'string', 'max:10'],
            'postal_code' => ['required', 'string', 'max:10'],
            'city' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'in:user,coach'],
        ];
    }
}
