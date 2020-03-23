<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function getAddEmployee()
    {
        return view('addEmployee');
    }

    public function postAddEmployee(Request $request)
    {
        $this->validate($request,[
          'name'=>'required',
          'email'=>'required | email',
          'salary'=>'required',
          'designation'=>'required'
        ]);

        $employee =new Employee();
        $employee->name=$request->input('name');
        $employee->email=$request->input('email');
        $employee->salary=$request->input('salary');
        $employee->designation=$request->input('designation');
        $employee->save();
       
        return redirect()->route('admin.getAddEmployee')->with('success','Employee Inserted');
        echo "Inserted";
    }
}
