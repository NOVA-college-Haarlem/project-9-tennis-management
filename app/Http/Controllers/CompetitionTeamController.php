<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompetitionTeamRequest;
use App\Models\Competition;
use App\Models\CompetitionTeam;
use App\Models\User;
use Illuminate\Http\Request;

class CompetitionTeamController extends Controller
{
    public function index() {
        $teams = CompetitionTeam::with('competition', 'captain')->get();
        return view('competition_teams.index', compact('teams'));
    }

    public function create() {
        $competitions = Competition::all();
        $users = User::all();
        $teams = CompetitionTeam::all();
        return view('competition_teams.create', compact('competitions', 'users', 'teams'));
    }

    public function store(CompetitionTeamRequest $request) {
        CompetitionTeam::create($request->validated());
        return redirect()->route('competition_teams.index');
    }

    public function show(CompetitionTeam $competitionTeam) {
        return view('competition_teams.show', compact('competitionTeam'));
    }

    public function edit(CompetitionTeam $competitionTeam) {
        $competitions = Competition::all();
        $users = User::all();
        $teams = CompetitionTeam::all();
        $competitionTeam = CompetitionTeam::with('competition', 'captain')->find($competitionTeam->id);
        return view('competition_teams.edit', compact('competitionTeam', 'competitions', 'users', 'teams'));
    }

    public function update(CompetitionTeamRequest $request, CompetitionTeam $competitionTeam) {
        $competitionTeam->update($request->validated());
        return redirect()->route('competition_teams.index');
    }

    public function destroy(CompetitionTeam $competitionTeam) {
        $competitionTeam->delete();
        return redirect()->route('competition_teams.index');
    }
}
