<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourtRequest;
use App\Models\Court;
use Illuminate\Http\Request;

class CourtController extends Controller
{

    public function index()
    {
        $courts = Court::all();
        return view('courts.index', compact('courts'));
    }

    public function create()
    {
        return view('courts.create');
    }

    public function store(CourtRequest $request)
    {
        Court::create($request->all());
        return redirect()->route('courts.index');
    }

    public function show(Court $court)
    {
        return view('courts.show', compact('court'));
    }

    public function edit(Court $court)
    {
        return view('courts.edit', compact('court'));
    }

    public function update(CourtRequest $request, Court $court)
    {
        $court->update($request->all());
        return redirect()->route('courts.index');
    }

    public function destroy(Court $court)
    {
        $court->delete();
        return redirect()->route('courts.index');
    }
}
