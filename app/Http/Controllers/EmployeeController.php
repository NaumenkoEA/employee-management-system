<?php
namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        $positions = Position::all();
        $departments = Department::all();
        return view('employee.create', compact('positions', 'departments'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'position_id' => 'required|exists:positions,id',
            'department_id' => 'required|exists:departments,id',
            'hire_date' => 'required|date',
            'salary' => 'required|numeric',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'birth_date' => 'required|date',
            'address' => 'required|string|max:255',
        ]);

        $employee = Employee::create($data);

        return redirect()->route('employee.index')->with('success', 'Сотрудник успешно добавлен');
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.show', compact('employee'));
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $positions = Position::all();
        $departments = Department::all();

        return view('employee.edit', compact('employee', 'positions', 'departments'));
    }


    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());
        return redirect()->route('employee.index')->with('success', 'Информация о сотруднике успешно обновлена');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employee.index')->with('success', 'Сотрудник успешно удален');
    }
}
