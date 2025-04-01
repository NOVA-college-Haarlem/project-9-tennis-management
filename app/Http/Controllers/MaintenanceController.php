<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaintenanceActivityRequest;
use App\Models\MaintenanceActivity;
use App\Models\MaintenanceTeam;
use App\Models\MaintenanceRequest;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maintenances = MaintenanceActivity::all();
        return view('maintenance.activities.index', compact('maintenance'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $maintenanceTeams = MaintenanceTeam::all();
        return view('maintenance.activities.create', compact('maintenanceTeams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $maintenance = new MaintenanceActivity();
        $this->save($maintenance, $request);
        return redirect()->route('maintenance.activities.index')->with('success', 'Maintenance activity created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MaintenanceActivity $activity)
    {
        $maintenances = MaintenanceTeam::all();
        return view('maintenance.activities.edit', compact('activity', 'maintenances'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MaintenanceActivityRequest $request, MaintenanceActivity $activity)
    {
        $this->save($activity, $request);
        return redirect()->route('maintenance.activities.index')->with('success', 'Maintenance activity updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MaintenanceActivity $activity)
    {
        $activity->delete();
        return redirect()->route('maintenance.activities.index')->with('success', 'Maintenance activity deleted successfully');
    }
    
    private function save(MaintenanceActivity $maintenance, MaintenanceActivityRequest $request)
    {
        $maintenance->title = $request->title;
        $maintenance->description = $request->description;
        $maintenance->maintenance_team_id = $request->maintenance_team_id;
        $maintenance->status = $request->status;
        $maintenance->save();
    }    
    
}
