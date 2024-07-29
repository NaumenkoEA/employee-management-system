<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\SickLeave;
use Illuminate\Http\Request;

class SickLeaveController extends Controller
{
    public function index($employee_id)
    {
        $employee = Employee::with('sickLeave')->findOrFail($employee_id);
        return view('sickLeave.index', compact('employee'));
    }

    public function create($employee_id)
    {
        $employee = Employee::findOrFail($employee_id);
        return view('sickLeave.create', compact('employee'));
    }

    public function store(Request $request, $employee_id)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'reason' => 'required|string'
        ]);

        $employee = Employee::findOrFail($employee_id);
        $employee->sickLeave()->create($request->only(['start_date', 'end_date', 'reason']));

        return redirect()->route('sickLeave.index', $employee_id)->with('success', 'Больничный добавлен.');
    }

    public function edit($employee_id, $sickLeave_id)
    {
        $employee = Employee::findOrFail($employee_id);
        $sickLeave = Employee::findOrFail($sickLeave_id);

        return view('sickLeave.edit', compact('employee', 'sickLeave'));
    }

    public function update(Request $request, $employee_id, $sickLeave_id)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'reason' => 'nullable|string'
        ]);

        $sickLeave = SickLeave::findOrFail($sickLeave_id);
        $sickLeave->update($request->only(['start_date', 'end_date', 'reason']));


        return redirect()->route('sickLeave.index', $employee_id)->with('success', 'Информация об отпуске обновлена.');
    }

    public function destroy($employee_id, $sickLeave_id)
    {
        $sickLeave = SickLeave::findOrFail($sickLeave_id);
        $sickLeave->delete();

        return redirect()->route('sickLeave.index', $employee_id)->with('success', 'Отпуск удален.');
    }
}
