<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeePhotoController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\VacationController;
use App\Http\Controllers\SickLeaveController;
use App\Http\Controllers\BusinessTripController;

Route::get('/',function (){return view('welcome');})->name('home');


Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employees.show');
Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy');


Route::get('/employees/{id}/photo', [EmployeePhotoController::class, 'show']);
Route::post('/employees/{id}/photo', [EmployeePhotoController::class, 'store']);


Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');
Route::get('/positions', [PositionController::class, 'index'])->name('positions.index');

Route::get('employees/{employee_id}/vacations', [VacationController::class, 'index'])->name('vacations.index');
Route::get('employees/{employee_id}/vacations/create', [VacationController::class, 'create'])->name('vacations.create');
Route::post('employees/{employee_id}/vacations', [VacationController::class, 'store'])->name('vacations.store');
Route::get('employees/{employee_id}/vacations/{vacation_id}/edit', [VacationController::class, 'edit'])->name('vacations.edit');
Route::put('employees/{employee_id}/vacations/{vacation_id}', [VacationController::class, 'update'])->name('vacations.update');
Route::delete('employees/{employee_id}/vacations/{vacation_id}', [VacationController::class, 'destroy'])->name('vacations.destroy');



//Route::get('/employees/{employee_id}/sick_leaves', [SickLeaveController::class, 'index']);
//Route::post('/employees/{employee_id}/sick_leaves', [SickLeaveController::class, 'store']);
//Route::get('/sick_leaves/{id}', [SickLeaveController::class, 'show']);
//Route::put('/sick_leaves/{id}', [SickLeaveController::class, 'update']);
//Route::delete('/sick_leaves/{id}', [SickLeaveController::class, 'destroy']);
//
//Route::get('/employees/{employee_id}/business_trips', [BusinessTripController::class, 'index']);
//Route::post('/employees/{employee_id}/business_trips', [BusinessTripController::class, 'store']);
//Route::get('/business_trips/{id}', [BusinessTripController::class, 'show']);
//Route::put('/business_trips/{id}', [BusinessTripController::class, 'update']);
//Route::delete('/business_trips/{id}', [BusinessTripController::class, 'destroy']);

