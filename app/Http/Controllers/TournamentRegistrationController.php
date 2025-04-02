<?php

namespace App\Http\Controllers;

use App\Http\Requests\TournamentRegistrationRequest;
use App\Models\Court;
use App\Models\Tournament;
use App\Models\TournamentRegistration;
use App\Models\User;
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
        $users = User::all();
        return view('tournament_registrations.create', compact('tournaments', 'users'));
    }

    public function store(TournamentRegistrationRequest $request)
    {
        TournamentRegistration::create($request->all());
        return redirect()->route('tournament_registrations.index');
    }

    public function show(TournamentRegistration $registration)
    {
        return view('tournament_registrations.show', compact('registration'));
    }    

    public function edit(TournamentRegistration $registration)
    {
        $tournaments = Tournament::all();
        $users = User::all();
        return view('tournament_registrations.edit', compact('registration', 'tournaments', 'users'));
    }

    public function update(TournamentRegistrationRequest $request, TournamentRegistration $registration)
    {
        $registration->update($request->all());
        return redirect()->route('tournament_registrations.index');
    }

    public function destroy(TournamentRegistration $registration)
    {
        $registration->delete();
        return redirect()->route('tournament_registrations.index');
    }
}
