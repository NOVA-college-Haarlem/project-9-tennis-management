<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourtRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'court_type' => ['required', 'string'],
            'court_condition' => ['required', 'string', 'in:Excellent,Decent,Barely Playable,Unplayable'],
            'surface' => ['required', 'string'],
            'indoor' => ['required', 'boolean'],
            'active' => ['required', 'boolean'],
        ];
    }
}
