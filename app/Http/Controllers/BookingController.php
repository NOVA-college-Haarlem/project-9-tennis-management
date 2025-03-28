<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use App\Models\Court;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }


    public function create()
    {
        $courts = Court::all();
        $users = User::all();
        return view('bookings.create', compact('courts', 'users'));
    }

    public function store(BookingRequest $request)
    {
        Booking::create($request->all());
        return redirect()->route('bookings.index');
    }


    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }


    public function edit(Booking $booking)
    {
        $courts = Court::all();
        $users = User::all();
        return view('bookings.edit', compact('booking', 'courts', 'users'));
    }


    public function update(BookingRequest $request, Booking $booking)
    {
        $booking->update($request->all());
        return redirect()->route('bookings.index');
    }


    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index');
    }
}
