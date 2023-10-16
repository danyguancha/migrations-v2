@extends('layouts.base')
@section('content')
<main class="container">
    <div class="row">
        <h1 class="alert alert-success text-center">{{$employee->name}} {{$employee->last_name}}</h1>
    </div>
    <div class="row">
        <div class="card my-3 text-center">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="card-title">Name: {{$employee->name}} {{$employee->last_name}}</h5>
                    <p class="card-text"><small class="text-muted">Fecha nacimiento: {{$employee->birth_date}}</small></p>
                    <p class="card-text">Email: {{$employee->email}}</p>
                    <p class="card-text">Phone: {{$employee->phone}}</p>
                    <p class="card-text">Gender: {{$employee->gender}}</p>
                    <p class="card-text">Address: {{$employee->address}}</p>
                    <p class="card-text">City: {{$employee->city}}</p>
                    <p class="card-text">Department: {{$employee->department}}</p>
                    <p class="card-text">Work_area: {{$employee->work_area}}</p>
                    <p class="card-text">Salary: {{$employee->salary}}</p>
                </div>


            </div>
        </div>
        <div class="col-12" style="text-align: right;">
            <a href="{{route('employees.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>



</main>
@endsection
