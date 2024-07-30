<?php

namespace App\Http\Controllers;

use App\Models\BusinessTrip;
use App\Models\Employee;
use Illuminate\Http\Request;

class BusinessTripController extends Controller
{
    public function index($employee_id)
    {
        $employee = Employee::with('businessTrips')->findOrFail($employee_id);
        return view('businessTrip.index', compact('employee'));
    }

    public function create($employee_id)
    {
        $employee = Employee::findOrFail($employee_id);
        return view('businessTrip.create', compact('employee'));
    }

    public function store(Request $request, $employee_id)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'goal_business_trip' => 'required|string',
            'country' => 'required|string',
            'city' => 'required|string',
        ]);

        $employee = Employee::findOrFail($employee_id);
        $employee->businessTrips()->create($request->only(['start_date', 'end_date', 'reason', 'goal_business_trip', 'country', 'city']));

        return redirect()->route('businessTrip.index', $employee_id)->with('success', 'Командировка добавлена.');
    }

    public function edit($employee_id, $business_trip_id)
    {
        $employee = Employee::findOrFail($employee_id);
        $businessTrip = Employee::findOrFail($business_trip_id);

        return view('businessTrip.edit', compact('employee', 'businessTrip'));
    }

    public function update(Request $request, $employee_id, $business_trip_id)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'goal_business_trip' => 'required|string',
            'country' => 'required|string',
            'city' => 'required|string',
        ]);

        $businessTrip = BusinessTrip::findOrFail($business_trip_id);
        $businessTrip->update($request->only(['start_date', 'end_date', 'reason', 'goal_business_trip', 'country', 'city']));


        return redirect()->route('$businessTrip.index', $employee_id)->with('success', 'Информация об командировке обновлена.');
    }

    public function destroy($employee_id, $business_trip_id)
    {
        $businessTrip = BusinessTrip::findOrFail($business_trip_id);
        $businessTrip->delete();

        return redirect()->route('businessTrip.index', $employee_id)->with('success', 'Командировка отменена.');
    }

}
