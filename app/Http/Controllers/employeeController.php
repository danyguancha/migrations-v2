<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use App\Enums\Work_areas;

class employeeController extends Controller
{
    public function index()
    {
        return view('employees.index',['employees' => Employee::all()]);
    }

    public function create()
    {
        return view('employees.create',['works_area'=> Work_areas::cases()]);
    }

    public function store(EmployeeRequest $request)
    {
        /*$employee = new Employee();
        $employee->name = $request->name;
        $employee->last_name = $request->last_name;
        $employee->birth_date = $request->birth_date;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->gender =$request->gender;
        $employee->address = $request->address;
        $employee->city = $request->city;
        $employee->department = $request->department;
        $employee->work_area = $request->work_area;
        $employee->salary = $request->salary;
        $employee->save();*/
        Employee::create($request->all());
        return redirect('/employees');
    }

    public function show(Employee $employee)
    {
        return view('employees.show',[
            'employee'=>$employee
        ]);
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit',[
            'employee'=>$employee,
            'works_area'=> Work_areas::cases()]);
    }

    public function update(EmployeeRequest $request, Employee $employee)
    {
        /*$employee->name = $request->name;
        $employee->last_name = $request->last_name;
        $employee->birth_date = $request->birth_date;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->gender = $request->gender;
        $employee->address = $request->address;
        $employee->city = $request->city;
        $employee->department = $request->department;
        $employee->work_area = $request->work_area;
        $employee->salary = $request->salary;
        $employee->update();*/
        $employee->update($request->all());

        return redirect('/employees');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return back();

    }
}
