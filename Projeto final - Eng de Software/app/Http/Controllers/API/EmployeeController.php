<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() { return Employee::all(); }
    public function store(Request $request) { return Employee::create($request->all()); }
    public function show($id) { return Employee::findOrFail($id); }
    public function update(Request $request, $id) {
        $emp = Employee::findOrFail($id);
        $emp->update($request->all());
        return $emp;
    }
    public function destroy($id) { return Employee::destroy($id); }

    public function withDepartment() {
        return Employee::with('department')->get();
    }

    public function getDepartment($id) {
        return Employee::findOrFail($id)->department;
    }
}