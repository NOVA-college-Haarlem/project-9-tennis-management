<?php

namespace App\Http\Controllers;

use App\Models\YouthProgram;
use Illuminate\Http\Request;

class YouthProgramController extends Controller
{
    public function index()
    {
        $programs = YouthProgram::all();
        return view('youth_programs.index', compact('programs'));
    }

    public function create()
    {
        return view('youth_programs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'min_age' => 'required|integer',
            'max_age' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'schedule' => 'required|string',
            'fee' => 'required|numeric',
            'capacity' => 'required|integer',
        ]);

        YouthProgram::create($request->all());
        
        return redirect()->route('youth_programs.index')->with('success', 'Youth program created successfully.');
    }

    public function show(YouthProgram $youthProgram)
    {
        return view('youth_programs.show', compact('youthProgram'));
    }

    public function edit(YouthProgram $youthProgram)
    {
        return view('youth_programs.edit', compact('youthProgram'));
    }

    public function update(Request $request, YouthProgram $youthProgram)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'min_age' => 'required|integer',
            'max_age' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'schedule' => 'required|string',
            'fee' => 'required|numeric',
            'capacity' => 'required|integer',
        ]);

        $youthProgram->update($request->all());
        
        return redirect()->route('youth_programs.index')->with('success', 'Youth program updated successfully.');
    }

    public function destroy(YouthProgram $youthProgram)
    {
        $youthProgram->delete();
        return redirect()->route('youth_programs.index')->with('success', 'Youth program deleted successfully.');
    }
}
