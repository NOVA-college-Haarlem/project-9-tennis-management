<?php

namespace App\Http\Controllers;

use App\Http\Requests\TournamentRegistrationRequest;
use App\Models\Tournament;
use App\Models\TournamentRegistration;
use Illuminate\Http\Request;

class TournamentRegistrationController extends Controller
{
    public function index()
    {
        $registrations = TournamentRegistration::all();
        return view('tournament_registrations.index', compact('registrations'));
    }

    public function create()
    {
        $tournaments = Tournament::all();
        return view('tournament_registrations.create', compact('tournaments'));
    }

    public function store(TournamentRegistration $request)
    {
        TournamentRegistration::create($request->all());
        return redirect()->route('tournament_registrations.index');
    }

    public function show(TournamentRegistration $tournamentRegistration)
    {
        return view('tournament_registrations.show', compact('tournamentRegistration'));
    }

    public function edit(TournamentRegistration $tournamentRegistration)
    {
        return view('tournament_registrations.edit', compact('tournamentRegistration'));
    }

    public function update(TournamentRegistrationRequest $request, TournamentRegistration $tournamentRegistration)
    {
        $tournamentRegistration->update($request->all());
        return redirect()->route('tournament_registrations.index');
    }

    public function destroy(TournamentRegistration $tournamentRegistration)
    {
        $tournamentRegistration->delete();
        return redirect()->route('tournament_registrations.index');
    }
}
