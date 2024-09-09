<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slot;
use GuzzleHttp\Middleware;

class SlotController extends Controller
{
    public function __construct() {
        $this->Middleware('auth');
    }
    /**
     *
     * Display a listing of the slots.
     */
    public function index()
    {
        // Fetch all slots from the database
        $existingSlots = Slot::where('booking_id', null)->pluck('date')->toArray();
        $bookedSlots=Slot::where('booking_id', '!=', null)->pluck('date')->toArray();


        // Return the view with the slots data
        return view('admin.slots.slots', compact('existingSlots','bookedSlots'));
    }

    /**
     * Show the form for creating new slots.
     */

    // public function store(Request $request)
    // {

    //     $validated = $request->validate([
    //         'selected_dates' => 'required', // Ensure the selected_dates field is an array
    //         'selected_dates.*' => 'date|after_or_equal:today', // Each date must be a valid date and not in the past
    //     ]);

    //     // Retrieve the selected dates from the validated data
    //     $selectedDates = json_decode($request->selected_dates, true); // Assuming you're storing JSON strings
    //     // dd($selectedDates);
    //     // Loop through the selected dates and create a new Slot for each date
    //     foreach ($selectedDates as $date) {
    //         Slot::create([
    //             'date' => $date,
    //             'booking_id' => null, // Set booking_id to null as per your requirements
    //         ]);
    //     }


    //     // Redirect back with a success message
    //     return redirect()->route('admin.slots.index')->with('success', 'Slots added successfully!');
    // }

    /**
     * Show the form for editing an existing slot.
     */
    // public function edit($id)
    // {
    //     // Find the slot by ID
    //     $slot = Slot::findOrFail($id);

    //     // Return the edit view with the slot data
    //     return view('admin.slots.edit', compact('slot'));
    // }

    /**
     * Update an existing slot in the database.
     */
    public function update(Request $request)
    {
        $addedSlots = json_decode($request->input('added_slots'), true);
        $removedSlots = json_decode($request->input('removed_slots'), true);

        // Add new slots
        foreach ($addedSlots as $date) {
            Slot::updateOrCreate(['date' => $date], ['booking_id' => null]);
        }

        // Remove slots
        Slot::whereIn('date', $removedSlots)->delete();

        return redirect()->back()->with('success', 'Slots updated successfully.');
    }
    /**
     * Remove the specified slot from the database.
     */
    public function destroy($id)
    {
        // Find the slot by ID and delete it
        $slot = Slot::findOrFail($id);
        $slot->delete();

        // Redirect back with a success message
        return redirect()->route('slots.index')->with('success', 'Slot deleted successfully!');
    }
}
