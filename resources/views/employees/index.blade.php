@extends('layouts.base')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-12">
                <h1 class="alert alert-info text-center">Employees</h1>
            </div>
            <div class="col-12">
                <a href="/employees/create" class="btn btn-success">Add employee</a>
            </div>
            <div class="col-12">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Birthdate</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">Department</th>
                            <th scope="col">Work area</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Show</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                        <tr>
                            <th scope="row">{{$employee->id_employee}}</th>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->last_name}}</td>
                            <td>{{$employee->birth_date}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->phone}}</td>
                            <td>{{$employee->gender}}</td>
                            <td>{{$employee->address}}</td>
                            <td>{{$employee->city}}</td>
                            <td>{{$employee->department}}</td>
                            <td>{{$employee->work_area}}</td>
                            <td>{{$employee->salary}}</td>
                            <td><a class="btn btn-primary" href="{{route('employees.show', $employee)}}"><i class="fa-solid fa-eye"></td>
                            <td><a class="btn btn-primary" href="{{route('employees.edit', $employee)}}"><i class="fa-solid fa-pen-to-square"></td>
                            <td>
                                <form action="{{route('employees.destroy', $employee)}}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
