<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TournamentRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'min_skill_level' => 'required|integer|min:1',
            'max_skill_level' => 'required|integer|gte:min_skill_level',
            'entry_fee' => 'required|numeric|min:0',
            'status' => 'required|string|in:pending,upcoming,ongoing,completed,canceled',
        ];
    }
}
