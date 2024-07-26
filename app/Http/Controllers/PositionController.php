<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{

    public function index()
    {
        $positions = Position::with('department')->get();
        return response()->json($positions);
    }

    public function assign(Request $request, $employee_id)
    {
        $request->validate([
            'position_id' => 'required|exists:positions,id',
        ]);

        $employee = Employee::findOrFail($employee_id);
        $employee->position_id = $request->position_id;
        $employee->save();

        return response()->json($employee, 200);
    }

    public function show(string $id)
    {
        $position = Position::with('department')->findOrFail($id);
        return response()->json($position);
    }

    public function employeePosition($id)
    {
        $employee = Employee::with('position')->findOrFail($id);
        return response()->json($employee->position);
    }


}
