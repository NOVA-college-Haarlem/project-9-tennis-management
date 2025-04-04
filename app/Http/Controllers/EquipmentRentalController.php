<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipmentRentalRequest;
use App\Models\Equipment;
use App\Models\EquipmentRental;
use App\Models\User;
use Illuminate\Http\Request;

class EquipmentRentalController extends Controller
{

    public function index()
    {
        $rentals = EquipmentRental::with('equipment', 'user')->get();
        return view('equipment_rentals.index', compact('rentals'));
    }

    public function create()
    {
        $equipments = Equipment::where('available', true)->get();
        $users = User::all();
        return view('equipment_rentals.create', compact('equipments', 'users'));
    }

    public function store(EquipmentRentalRequest $request)
    {
        $equipmentRental = EquipmentRental::create($request->validated());

        // Mark equipment as unavailable when rented
        $equipmentRental->equipment->update(['available' => false]);

        return redirect()->route('equipment_rentals.index');
    }

    public function show(EquipmentRental $equipmentRental)
    {
        return view('equipment_rentals.show', compact('equipmentRental'));
    }

    public function edit(EquipmentRental $equipmentRental)
    {
        $equipments = Equipment::all();
        $users = User::all();
        return view('equipment_rentals.edit', compact('equipmentRental', 'equipments', 'users'));
    }

    public function update(EquipmentRentalRequest $request, EquipmentRental $equipmentRental)
    {
        $equipmentRental->equipment->update(['available' => false]);
        $equipmentRental->update($request->validated());
        return redirect()->route('equipment_rentals.index');
    }

    public function destroy(EquipmentRental $equipmentRental)
    {
        $equipmentRental->equipment->update(['available' => true]);

        $equipmentRental->delete();
        return redirect()->route('equipment_rentals.index');
    }
}
