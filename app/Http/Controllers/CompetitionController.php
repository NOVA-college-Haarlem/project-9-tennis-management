<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompetitionRequest;
use App\Models\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function index() {
        $competitions = Competition::all();
        return view('competitions.index', compact('competitions'));
    }

    public function create() {
        return view('competitions.create');
    }

    public function store(CompetitionRequest $request) {
        Competition::create($request->all());
        return redirect()->route('competitions.index');
    }

    public function show(Competition $competition) {
        return view('competitions.show', compact('competition'));
    }

    public function edit(Competition $competition) {
        return view('competitions.edit', compact('competition'));
    }

    public function update(CompetitionRequest $request, Competition $competition) {
        $competition->update($request->all());
        return redirect()->route('competitions.index');
    }

    public function destroy(Competition $competition) {
        $competition->delete();
        return redirect()->route('competitions.index');
    }
}
