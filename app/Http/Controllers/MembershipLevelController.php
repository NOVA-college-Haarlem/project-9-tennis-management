<?php

namespace App\Http\Controllers;

use App\Models\MembershipLevel;
use Illuminate\Http\Request;

class MembershipLevelController extends Controller
{
    public function index()
    {
        $membershipLevels = MembershipLevel::all();
        return view('membership-levels.index', compact('membershipLevels'));
    }

    public function create()
    {
        return view('membership-levels.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'max_booking_days_ahead' => 'required|integer',
            'allow_guests' => 'required|boolean',
        ]);

        MembershipLevel::create($request->all());
        return redirect()->route('membership-levels.index');
    }

    public function show(MembershipLevel $membershipLevel)
    {
        return view('membership-levels.show', compact('membershipLevel'));
    }

    public function edit(MembershipLevel $membershipLevel)
    {
        return view('membership-levels.edit', compact('membershipLevel'));
    }

    public function update(Request $request, MembershipLevel $membershipLevel)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'max_booking_days_ahead' => 'required|integer',
            'allow_guests' => 'required|boolean',
        ]);

        $membershipLevel->update($request->all());
        return redirect()->route('membership-levels.index');
    }

    public function destroy(MembershipLevel $membershipLevel)
    {
        $membershipLevel->delete();
        return redirect()->route('membership-levels.index');
    }
}