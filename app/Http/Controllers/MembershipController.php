<?php

namespace App\Http\Controllers;

use App\Http\Requests\MembershipRequest;
use App\Models\Membership;
use App\Models\MembershipLevel;
use App\Models\User;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $memberships = Membership::with('user', 'membershipLevel')->get();
        return view('memberships.index', compact('memberships'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $membershipLevels = MembershipLevel::all();
        return view('memberships.create', compact('users', 'membershipLevels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MembershipRequest $request)
    {
        $membership = new Membership();
        $this->save($membership, $request);
        return redirect()->route('memberships.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $membership = Membership::with('user', 'membershipLevel')->findOrFail($id);
        return view('memberships.show', compact('membership'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Membership $membership)
    {
        $users = User::all();
        $membershipLevels = MembershipLevel::all();
        return view('memberships.edit', compact('membership', 'users', 'membershipLevels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MembershipRequest $request, Membership $membership)
    {
        $this->save($membership, $request);
        return redirect()->route('memberships.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $membership = Membership::findOrFail($id);
        $membership->delete();
        return redirect()->route('memberships.index');
    }

    /**
     * Save or update the membership.
     */
    public function save(Membership $membership, MembershipRequest $request)
    {
        $membership->user_id = $request->input('user_id');
        $membership->membership_level_id = $request->input('membership_level_id');
        $membership->start_date = $request->input('start_date');
        $membership->end_date = $request->input('end_date');
        $membership->active = $request->input('active', false); // Default to false if not checked
        $membership->balance = $request->input('balance');
        $membership->save();
    }
}