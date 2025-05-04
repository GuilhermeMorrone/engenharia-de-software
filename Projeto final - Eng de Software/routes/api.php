<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\EmployeeController;
use App\Http\Controllers\API\DepartmentController;

Route::apiResource('employees', EmployeeController::class);
Route::apiResource('departments', DepartmentController::class);

// Rotas personalizadas
Route::get('/employees-with-department', [EmployeeController::class, 'withDepartment']);
Route::get('/departments-with-employees', [DepartmentController::class, 'withEmployees']);
Route::get('/employee/{id}/department', [EmployeeController::class, 'getDepartment']);
Route::get('/department/{id}/employees', [DepartmentController::class, 'getEmployees']);