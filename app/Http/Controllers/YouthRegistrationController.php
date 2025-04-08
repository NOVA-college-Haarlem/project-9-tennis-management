<?php

namespace App\Http\Controllers;

use App\Models\YouthProgram;
use App\Models\YouthRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class YouthRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registrations = YouthRegistration::with('program')->get();
        return view('youth_registrations.index', compact('registrations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $youthPrograms = YouthProgram::all();
        return view('youth_registrations.create', compact('youthPrograms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'program_id' => 'required|exists:youth_programs,id',
            'child_firstname' => 'required|string|max:255',
            'child_lastname' => 'required|string|max:255',
            'child_age' => 'required|integer',
            'emergency_contact_phone' => 'required|string|max:15',
        ]);

        YouthRegistration::create([
            'parent_user_id' => Auth::id(),
            'program_id' => $request->program_id,
            'child_firstname' => $request->child_firstname,
            'child_lastname' => $request->child_lastname,
            'child_age' => $request->child_age,
            'emergency_contact_phone' => $request->emergency_contact_phone,
            'registration_date' => now(),
            'status' => 'pending',
        ]);

        return redirect()->route('youth_registrations.index')->with('success', 'Registration successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(YouthRegistration $youthRegistration)
    {
        return view('youth_registrations.show', compact('youthRegistration'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(YouthRegistration $youthRegistration)
    {
        $youthPrograms = YouthProgram::all();
        return view('youth_registrations.edit', compact('youthRegistration', 'youthPrograms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, YouthRegistration $youthRegistration)
    {
        $request->validate([
            'program_id' => 'required|exists:youth_programs,id',
            'child_firstname' => 'required|string|max:255',
            'child_lastname' => 'required|string|max:255',
            'child_age' => 'required|integer',
            'emergency_contact_phone' => 'required|string|max:15',
        ]);

        $youthRegistration->update([
            'program_id' => $request->program_id,
            'child_firstname' => $request->child_firstname,
            'child_lastname' => $request->child_lastname,
            'child_age' => $request->child_age,
            'emergency_contact_phone' => $request->emergency_contact_phone,
            'status' => $request->status ?? $youthRegistration->status,
        ]);

        return redirect()->route('youth_registrations.index')->with('success', 'Registration updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(YouthRegistration $youthRegistration)
    {
        $youthRegistration->delete();

        return redirect()->route('youth_registrations.index')->with('success', 'Registration deleted successfully!');
    }
}