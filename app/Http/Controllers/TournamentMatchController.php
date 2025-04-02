<?php

namespace App\Http\Controllers;

use App\Http\Requests\TournamentMatchRequest;
use App\Models\Tournament;
use App\Models\TournamentMatch;
use App\Models\User;
use Illuminate\Http\Request;

class TournamentMatchController extends Controller
{
    public function index()
    {
        $tournament_matches = TournamentMatch::with('tournament', 'player1', 'player2')->get();
        return view('tournament_matches.index', compact('tournament_matches'));
    }

    public function create()
    {
        $tournaments = Tournament::all();
        $users = User::all();

        return view('tournament_matches.create', compact('tournaments', 'users'));
    }

    public function store(TournamentMatchRequest $request)
    {
        TournamentMatch::create($request->all());
        return redirect()->route('tournament_matches.index');
    }

    public function show(TournamentMatch $tournament_match)
    {
        return view('tournament_matches.show', compact('tournament_match'));
    }

    public function edit(TournamentMatch $tournament_match)
    {
        $tournaments = Tournament::all();
        $users = User::all();
        return view('tournament_matches.edit', compact('tournament_match', 'users', 'tournaments'));
    }

    public function update(TournamentMatchRequest $request, TournamentMatch $tournament_match)
{
    // Validate that scores are provided when the status is 'completed'
    if ($request->status == 'completed' && ($request->player1_score === null || $request->player2_score === null)) {
        return redirect()->back()->withErrors([
            'score' => 'Both Player 1 and Player 2 scores are required when the status is completed.'
        ])->withInput();
    }

    // Update the tournament match
    $tournament_match->update([
        'player1_id' => $request->player1_id,
        'player2_id' => $request->player2_id,
        'status' => $request->status,
        'player1_score' => $request->player1_score,
        'player2_score' => $request->player2_score,
        'scheduled_time' => $request->scheduled_time,
        'tournament_id' => $request->tournament_id,
    ]);

    return redirect()->route('tournament_matches.index')->with('success', 'Tournament match updated successfully.');
}
    
    

    public function destroy(TournamentMatch $tournament_match)
    {
        $tournament_match->delete();
        return redirect()->route('tournament_matches.index');
    }
}
