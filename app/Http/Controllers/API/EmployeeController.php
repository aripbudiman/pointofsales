<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    
    public function getAllEmployee(){
        $data=Employee::with('user')->get();
        return response()->json($data);
    }
}
