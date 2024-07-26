<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeePhotoController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\VacationController;
use App\Http\Controllers\SickLeaveController;
use App\Http\Controllers\BusinessTripController;

Route::apiResource('employees', EmployeeController::class);
Route::get('employees/{id}/photo', [EmployeePhotoController::class, 'show']);
Route::post('employees/{id}/photo', [EmployeePhotoController::class, 'store']);
Route::apiResource('positions', PositionController::class);
Route::apiResource('leaves', VacationController::class);
Route::apiResource('sick-leaves', SickLeaveController::class);
Route::apiResource('business-trips', BusinessTripController::class);
