<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index() { return Department::all(); }
    public function store(Request $request) { return Department::create($request->all()); }
    public function show($id) { return Department::findOrFail($id); }
    public function update(Request $request, $id) {
        $dept = Department::findOrFail($id);
        $dept->update($request->all());
        return $dept;
    }
    public function destroy($id) { return Department::destroy($id); }

    public function withEmployees() {
        return Department::with('employees')->get();
    }

    public function getEmployees($id) {
        return Department::findOrFail($id)->employees;
    }
}