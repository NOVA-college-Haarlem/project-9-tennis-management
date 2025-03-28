<?php

namespace App\Http\Controllers;

use App\Http\Requests\TournamentMatchRequest;
use App\Models\Tournament;
use App\Models\TournamentMatch;
use Illuminate\Http\Request;

class TournamentMatchController extends Controller
{
    public function index()
    {
        $matches = TournamentMatch::with('tournament')->get();
        return view('tournament_matches.index', compact('matches'));
    }

    public function create()
    {
        $tournaments = Tournament::all();
        return view('tournament_matches.create', compact('tournaments'));
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
        return view('tournament_matches.edit', compact('tournament_match'));
    }

    public function update(TournamentMatchRequest $request, TournamentMatch $tournament_match)
    {
        $tournament_match->update($request->all());
        return redirect()->route('tournament_matches.index');
    }

    public function destroy(TournamentMatch $tournament_match)
    {
        $tournament_match->delete();
        return redirect()->route('tournament_matches.index');
    }
}
