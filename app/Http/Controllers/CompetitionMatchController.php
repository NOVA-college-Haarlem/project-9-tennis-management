<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompetitionMatchRequest;
use App\Models\Competition;
use App\Models\CompetitionMatch;
use App\Models\CompetitionTeam;
use App\Models\Court;
use Illuminate\Http\Request;

class CompetitionMatchController extends Controller
{
    public function index()
    {
        $matches = CompetitionMatch::with('competition', 'team1', 'team2')->get();
        return view('competition_matches.index', compact('matches'));
    }

    public function create()
    {
        $competitions = Competition::all();
        $teams = CompetitionTeam::all();
        $matches = CompetitionMatch::all();
        $courts = Court::all();
        return view('competition_matches.create', compact('competitions', 'teams', 'matches', 'courts'));
    }

    public function store(CompetitionMatchRequest $request)
    {
        CompetitionMatch::create($request->validated());
        return redirect()->route('competition_matches.index');
    }

    public function show(CompetitionMatch $competitionMatch)
    {
        return view('competition_matches.show', compact('competitionMatch'));
    }

    public function edit(CompetitionMatch $competitionMatch)
    {
        $competitions = Competition::all();
        $teams = CompetitionTeam::all();
        $matches = CompetitionMatch::all();
        $courts = Court::all();

        return view('competition_matches.edit', compact('competitionMatch', 'competitions', 'teams', 'courts'));
    }

    public function update(CompetitionMatchRequest $request, CompetitionMatch $competitionMatch)
    {
        $competitionMatch->update($request->validated());
        return redirect()->route('competition_matches.index');
    }

    public function destroy(CompetitionMatch $competitionMatch)
    {
        $competitionMatch->delete();
        return redirect()->route('competition_matches.index');
    }
}
