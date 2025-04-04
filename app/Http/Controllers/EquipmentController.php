<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipmentRequest;
use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipments = Equipment::all();
        return view('equipments.index', compact('equipments'));
    }

    public function create()
    {
        return view('equipments.create');
    }

    public function store(EquipmentRequest $request)
    {
        Equipment::create($request->all());
        return redirect()->route('equipments.index');
    }

    public function show(Equipment $equipment)
    {
        return view('equipments.show', compact('equipment'));
    }

    public function edit(Equipment $equipment)
    {
        return view('equipments.edit', compact('equipment'));
    }


    public function update(EquipmentRequest $request, Equipment $equipment)
    {
        $equipment->update($request->all());
        return redirect()->route('equipments.index');
    }

    public function destroy(Equipment $equipment)
    {
        $equipment->delete();
        return redirect()->route('equipments.index');
    }
}
