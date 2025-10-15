<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

    public function getEmployees()
    {
        $url = 'https://test-veritech-hr-api-main-wb2ody.laravel.cloud/api/employees';

        $response = Http::withOptions([
            'verify' => false, // SSL шалгалтыг түр хаах
            'curl' => [
                CURLOPT_SSLVERSION => CURL_SSLVERSION_TLSv1_2, // TLS хувилбарыг заах
            ],
        ])->get($url);

        return $response->json();
    }


}
