<?php

namespace App\Http\Controllers;

use App\Http\Requests\MembershipLevelRequest;
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

    public function store(MembershipLevelRequest $request)
    {
        $membershipLevel = new MembershipLevel();
        $this->save($membershipLevel, $request);
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

    public function update(MembershipLevelRequest $request, MembershipLevel $membershipLevel)
    {
        $membershipLevel->update($request->all());
        $this->save($membershipLevel, $request);
        return redirect()->route('membership-levels.index');
    }

    public function destroy(MembershipLevel $membershipLevel)
    {
        $membershipLevel->delete();
        return redirect()->route('membership-levels.index');
    }

    public function save(MembershipLevel $membershipLevel, MembershipLevelRequest $request)
    {
        $membershipLevel->name = $request->input('name');
        $membershipLevel->description = $request->input('description');
        $membershipLevel->price = $request->input('price');
        $membershipLevel->max_booking_days_ahead = $request->input('max_booking_days_ahead');
        $membershipLevel->max_booking_hours = $request->input('max_booking_hours');
        $membershipLevel->allow_guests = $request->input('allow_guests');
        $membershipLevel->access_competitions = $request->input('access_competitions');
        $membershipLevel->save();
    }
    
}