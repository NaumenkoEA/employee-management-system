<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeePhotoController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\VacationController;
use App\Http\Controllers\SickLeaveController;
use App\Http\Controllers\BusinessTripController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('employees/{id}/photo', [EmployeePhotoController::class, 'show']);
Route::post('employees/{id}/photo', [EmployeePhotoController::class, 'store']);

Route::get('departments', [DepartmentController::class, 'index']);

Route::get('positions', [PositionController::class, 'index']);
Route::get('positions/{id}', [PositionController::class, 'show']);
Route::post('employees/{id}/position', [PositionController::class, 'assign']);
Route::get('employees/{id}/position', [PositionController::class, 'employeePosition']);

Route::get('employees/{employee_id}/leaves', [VacationController::class, 'index']);
Route::post('employees/{employee_id}/leaves', [VacationController::class, 'store']);
Route::put('leaves/{id}', [VacationController::class, 'update']);
Route::delete('leaves/{id}', [VacationController::class, 'destroy']);

Route::get('employees/{employee_id}/sick_leaves', [SickLeaveController::class, 'index']);
Route::post('employees/{employee_id}/sick_leaves', [SickLeaveController::class, 'store']);
Route::get('sick_leaves/{id}', [SickLeaveController::class, 'show']);
Route::put('sick_leaves/{id}', [SickLeaveController::class, 'update']);
Route::delete('sick_leaves/{id}', [SickLeaveController::class, 'destroy']);

Route::get('employees/{employee_id}/business_trips', [BusinessTripController::class, 'index']);
Route::post('employees/{employee_id}/business_trips', [BusinessTripController::class, 'store']);
Route::get('business_trips/{id}', [BusinessTripController::class, 'show']);
Route::put('business_trips/{id}', [BusinessTripController::class, 'update']);
Route::delete('business_trips/{id}', [BusinessTripController::class, 'destroy']);

