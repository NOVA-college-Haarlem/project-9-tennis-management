<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompetitionTeamRequest extends FormRequest
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
            'competition_id' => 'required|exists:competitions,id',
            'court_id' => 'required|exists:courts,id',
            'team1_id' => 'required|exists:competition_teams,id|different:team2_id',
            'team2_id' => 'required|exists:competition_teams,id',
            'scheduled_time' => 'required|date|after:today',
            'score' => 'nullable|string|max:255',
            'status' => 'nullable|string|in:scheduled,ongoing,completed',
        ];
    }
}
