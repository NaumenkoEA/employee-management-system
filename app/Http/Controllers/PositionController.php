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

    public function showAssignForm($employee_id)
    {
        $employee = Employee::findOrFail($employee_id);
        return view('position.assign', compact('employee'));
    }

    // Метод для назначения должности
    public function assign(Request $request, $employee_id)
    {
        $request->validate([
            'position_id' => 'required|exists:positions,id',
        ]);

        $employee = Employee::findOrFail($employee_id);
        $employee->position_id = $request->position_id;
        $employee->save();

        return redirect()->route('employees.index')->with('success', 'Должность успешно назначена');
    }

    public function employeePosition($id)
    {
        $employee = Employee::with('position')->findOrFail($id);
        return response()->json($employee->position);
    }


}
