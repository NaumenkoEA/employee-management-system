<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{

    public function index()
    {
        $positions = Position::all();
        return view('position.index', compact('positions'));
    }

    public function assign(Request $request, $employee_id)
    {
        $request->validate([
            'position_id' => 'required|exists:positions,id',
        ]);

        $employee = Employee::findOrFail($employee_id);
        $employee->position_id = $request->position_id;
        $employee->save();

        return view('position.assign', compact('employee'));
    }

    public function employeePosition($id)
    {
        $employee = Employee::with('position')->findOrFail($id);
        return response()->json($employee->position);
    }


}
