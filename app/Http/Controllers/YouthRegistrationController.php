<?php

namespace App\Http\Controllers;

use App\Models\YouthProgram;
use App\Models\YouthRegistration;
use Illuminate\Http\Request;

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
        return view('youth_registrations.create', compact('youthProgram'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, YouthProgram $youthProgram)
    {
        //
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
        return view('youth_registrations.edit', compact('youthRegistration'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, YouthRegistration $youthRegistration)
    {
        //
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
