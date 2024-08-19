<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.booking.index', [
            'bookings' => Booking::orderBy('id', 'ASC')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.booking.form', [
        'booking' => new Booking(),
        // 'products' => $products,
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([

            // 'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'gender' => 'required|string|max:10',
            'date' => 'required|date',
            'time' => 'required',
            'status' => 'required|string|max:255',

        ]);

        // $validated = $request->all();

        Booking::create($validated);

        return redirect()->route('booking.status')->with('success', 'You have booked the appoinment successfuly!');
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
    public function edit(Booking $booking)
    {
        return view('admin.booking.form', [
            'booking' => $booking,
        //    'products' => Product::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
       $validated = $request->validate([

            // 'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'gender' => 'required|string|max:10',
            'date' => 'required|date',
            'time' => 'required',
            'status' => 'required|string|max:255',

        ]);

        $booking->update($validated);

        return redirect()->route('booking.index')->with('success', 'You have Updated the appoinment successfuly!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('booking.index')->with('success', 'Booking successfully deleted!');
    }
}
