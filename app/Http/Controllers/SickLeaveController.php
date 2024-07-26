<?php

namespace App\Http\Controllers;

use App\Models\SickLeave;
use Illuminate\Http\Request;

class SickLeaveController extends Controller
{
    public function index($employee_id)
    {
        $sickLeaves = SickLeave::where('employee_id', $employee_id)->get();
        return response()->json($sickLeaves);
    }

    public function store(Request $request, $employee_id)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'reason' => 'nullable|string',
        ]);

        $sickLeave = SickLeave::create([
            'employee_id' => $employee_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'reason' => $request->reason,
        ]);

        return response()->json($sickLeave, 201);
    }

    public function update(Request $request, $id)
    {
        $sickLeave = SickLeave::findOrFail($id);

        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'reason' => 'nullable|string',
        ]);

        $sickLeave->update($request->all());

        return response()->json($sickLeave);
    }

    public function destroy($id)
    {
        $sickLeave = SickLeave::findOrFail($id);
        $sickLeave->delete();

        return response()->json(null, 204);
    }
}
