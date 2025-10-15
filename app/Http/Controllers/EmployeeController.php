<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        return response()->json([
            'success' => true,
            'count' => $employees->count(),
            'data' => $employees
        ]);
    }

    public function show($id)
    {
        $employee = Employee::find($id);

        if (!$employee) {
            return response()->json([
                'success' => false,
                'message' => 'Ажилтан олдсонгүй'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $employee
        ]);
    }
}
