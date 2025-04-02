<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TournamentMatchRequest extends FormRequest
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
        $rules = [
            'scheduled_time' => 'required|date',
            'player1_id' => 'required|exists:users,id',
            'player2_id' => 'required|exists:users,id|different:player1_id',
            'court_id' => 'nullable|exists:courts,id',
            'status' => 'required|string|in:pending,upcoming,completed,canceled',
            'player1_score' => 'nullable|integer|min:0',
            'player2_score' => 'nullable|integer|min:0',
        ];
    
        if (in_array($this->status, ['completed'])) {
            $rules['player1_score'] = 'required|integer|min:0';
            $rules['player2_score'] = 'required|integer|min:0';
        }
    
        return $rules;
    }
    
    
    public function messages()
    {
        return [
            'player1_score.required' => 'Player 1 score is required when the status is ongoing or completed.',
            'player2_score.required' => 'Player 2 score is required when the status is ongoing or completed.',
        ];
    }
}
