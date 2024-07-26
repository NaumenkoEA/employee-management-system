<?php

namespace App\Http\Controllers;

use App\Models\Vacation;
use Illuminate\Http\Request;

class VacationController extends Controller
{
    public function index($employee_id)
    {
        $leaves = Vacation::where('employee_id', $employee_id)->get();
        return response()->json($leaves);
    }

    public function store(Request $request, $employee_id)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'reason' => 'nullable|string',
        ]);

        $leave = Vacation::create([
            'employee_id' => $employee_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'reason' => $request->reason,
        ]);

        return response()->json($leave, 201);
    }

    public function update(Request $request, $id)
    {
        $leave = Vacation::findOrFail($id);

        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'reason' => 'nullable|string',
        ]);

        $leave->update($request->all());

        return response()->json($leave);
    }

    public function destroy($id)
    {
        $leave = Vacation::findOrFail($id);
        $leave->delete();

        return response()->json(null, 204);
    }
}
