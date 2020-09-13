<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function createDepartment(Request $request)
    {
        return view("backend.departments.create_department");
    }
    public function getDepartmentList(Request $request)
    {
        return view("backend.departments.department_list");
    }
}
