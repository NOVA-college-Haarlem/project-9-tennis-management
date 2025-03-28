<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaintenanceScheduleRequest;
use App\Models\Court;
use App\Models\MaintenanceSchedule;
use Illuminate\Http\Request;

class MaintenanceScheduleController extends Controller
{

    public function index()
    {
        $maintenanceSchedules = MaintenanceSchedule::all();
        return view('maintenanceschedules.index', compact('maintenanceSchedules')); 
    }


    public function create()
    {
        $courts = Court::all();
        return view('maintenanceschedules.create', compact('courts'));
    }


    public function store(MaintenanceScheduleRequest $request)
    {
        MaintenanceSchedule::create($request->all());
        return redirect()->route('maintenanceschedules.index');
    }

    public function show(MaintenanceSchedule $maintenanceSchedule)
    {
        return view('maintenanceschedules.show', compact('maintenanceSchedule'));
    }


    public function edit(MaintenanceSchedule $maintenanceSchedule)
    {
        $courts = Court::all();
        return view('maintenanceschedules.edit', compact('maintenanceSchedule', 'courts'));
    }


    public function update(MaintenanceScheduleRequest $request, MaintenanceSchedule $maintenanceSchedule)
    {
        $maintenanceSchedule->update($request->all());
        return redirect()->route('maintenanceschedules.index');
    }

    public function destroy(MaintenanceSchedule $maintenanceSchedule)
    {
        $maintenanceSchedule->delete();
        return redirect()->route('maintenanceschedules.index');
    }
}
