<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    function post(Request $request)
    {

        $employee = new Employee();
        $employee->name = $request->name;
        $employee->mobileNumber = $request->mobileNumber;
        $employee->email = $request->email;
        $employee->position = $request->position;
        $employee->address = $request->address;

        $employee->save();
        return response()->json([
            "message" => "Success",
            "data" => $employee

        ]);
    }

    function get()
    {
        $data = Employee::all();

        return response()->json([
            "message" => "Success",
            "data" => $data

        ]);
    }

    function getById($id)
    {
        $data = Employee::where('id', $id)->get();

        return response()->json([
            "message" => "Success",
            "data" => $data
        ]);
    }

    function put($id, Request $request)
    {
        $employee = Employee::where('id', $id)->first();
        if ($employee) {
            $employee->name = $request->name ? $request->name : $employee->name;
            $employee->mobileNumber = $request->mobileNumber ? $request->mobileNumber : $employee->mobileNumber;
            $employee->email = $request->email ? $request->email : $employee->email;
            $employee->position = $request->position ? $request->position : $employee->position;
            $employee->address = $request->address ? $request->address : $employee->address;

            $employee->save();
            return response()->json([
                "message" => "Success",
                "data" => $employee
            ]);
        }
        return response()->json([
            "message" => "Employee id " . $id . " not found"
        ], 400);
    }

    function delete($id)
    {
        $employee = Employee::where('id', $id)->first();
        if ($employee) {
            $employee->delete();
            return response()->json([
                "message" => "Delete Employee id " . $id . " Success"
            ]);
        }
        return response()->json([
            "message" => "Employee id " . $id . " not found"
        ], 400);
    }
}
