<?php

namespace App\Http\Controllers;

use App\Employee;

class EmployeesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // Return all employees
    public function showAllEmployees(){
        $employees = Employee::all();

        return json_encode($employees);
    }

    //Return employee by id
    public function showEmployeeById($id){
        $employee = Employee::find($id);

        return json_encode($employee);
    }

    //Return employees by type
    public function showEmployeeByJob(Request $request){
        $employees = Employee::where('job', $job)->get();

        return json_encode($employees);
    }

    public function createEmployee(Request $request)
    {
        $employee = Employee::create($request->all());

        return json_encode($employee);
    }

    public function deleteEmployee($id)
    {
        $employee = Employee::destroy($id);
        return response('Employee deleted Successfully', 200);
    }

    public function patchEmployee(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->update($request->all());
        return json_encode($employee);
    }
}
