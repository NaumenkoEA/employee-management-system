<?php

namespace App\Http\Controllers;

use App\Models\BusinessTrip;
use Illuminate\Http\Request;

class BusinessTripController extends Controller
{
    public function index($employee_id)
    {
        $businessTrips = BusinessTrip::where('employee_id', $employee_id)->get();
        return response()->json($businessTrips);
    }

    public function store(Request $request, $employee_id)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'destination' => 'required|string',
            'purpose' => 'nullable|string',
        ]);

        $businessTrip = BusinessTrip::create([
            'employee_id' => $employee_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'destination' => $request->destination,
            'purpose' => $request->purpose,
        ]);

        return response()->json($businessTrip, 201);
    }

    public function show($id)
    {
        $businessTrip = BusinessTrip::findOrFail($id);
        return response()->json($businessTrip);
    }

    public function update(Request $request, $id)
    {
        $businessTrip = BusinessTrip::findOrFail($id);

        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'destination' => 'required|string',
            'purpose' => 'nullable|string',
        ]);

        $businessTrip->update($request->all());

        return response()->json($businessTrip);
    }

    public function destroy($id)
    {
        $businessTrip = BusinessTrip::findOrFail($id);
        $businessTrip->delete();

        return response()->json(null, 204);
    }
}
