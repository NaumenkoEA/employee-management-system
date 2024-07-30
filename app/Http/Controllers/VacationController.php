<?php

namespace App\Http\Controllers;

use App\Models\Vacation;
use App\Models\Employee;
use Illuminate\Http\Request;

class VacationController extends Controller
{
    public function index($employee_id)
    {
        $employee = Employee::with('vacations')->findOrFail($employee_id);
        return view('vacations.index', compact('employee'));
    }

    public function create($employee_id)
    {
        $employee = Employee::findOrFail($employee_id);
        return view('vacations.create', compact('employee'));
    }

    public function store(Request $request, $employee_id)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'reason' => 'nullable|string'
        ]);

        $employee = Employee::findOrFail($employee_id);
        $employee->vacations()->create($request->only(['start_date', 'end_date', 'reason']));

        return redirect()->route('vacations.index', $employee_id)->with('success', 'Отпуск добавлен.');
    }

    public function edit($employee_id, $vacation_id)
    {
        $employee = Employee::findOrFail($employee_id);
        $vacation = Vacation::findOrFail($vacation_id);

        return view('vacations.edit', compact('employee', 'vacation'));
    }

    public function update(Request $request, $employee_id, $vacation_id)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'reason' => 'nullable|string'
        ]);

        $vacation = Vacation::findOrFail($vacation_id);
        $vacation->update($request->all());

        return redirect()->route('vacations.index', $employee_id)->with('success', 'Информация об отпуске обновлена.');
    }

    public function destroy($employee_id, $vacation_id)
    {
        $vacation = Vacation::findOrFail($vacation_id);
        $vacation->delete();

        return redirect()->route('vacations.index', $employee_id)->with('success', 'Отпуск удален.');
    }
}
