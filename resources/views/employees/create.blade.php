@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="alert alert-info text-center">Create new employee</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('employees.store') }}" method="post" class="row">
                    @csrf <!-- cross site request forgery -->
                    <div class="col-6">
                        <label for="employee-name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter employee name" value="{{old('name')}}">
                    </div>
                    <div class="col-6">
                        <label for="employee-last-name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter employee last name" value="{{old('last_name')}}">
                    </div>
                    <div class="col-6">
                        <label for="employee-birth-date" class="form-label">Birth Date</label>
                        <input type="date" class="form-control" id="birth_date" name="birth_date" placeholder="Enter employee birth date" value="{{old('birth_date')}}">
                    </div>
                    <div class="col-6">
                        <label for="employee-email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter employee email" value="{{old('email')}}">
                    </div>
                    <div class="col-6">
                        <label for="employee-phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter employee phone" value="{{old('phone')}}">
                    </div>
                    <div class="col-6">
                        <label for="employee-gender" class="form-label">Gender</label>
                        <input type="text" class="form-control" id="gender" name="gender" placeholder="Enter employee gender" value="{{old('gender')}}">
                    </div>
                    <div class="col-6">
                        <label for="employee-address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter employee address" value="{{old('address')}}">
                    </div>
                    <div class="col-6">
                        <label for="employee-city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Enter employee city" value="{{old('city')}}">
                    </div>
                    <div class="col-6">
                        <label for="employee-department" class="form-label">Department</label>
                        <input type="text" class="form-control" id="department" name="department" placeholder="Enter employee department" value="{{old('department')}}">
                    </div>
                    <div class="col-6">
                        <label for="employee-work-area" class="form-label">Work Area</label>
                        <select name="work_area" id="work_area" class="form-control">
                            @foreach($works_area as $area)
                                <option value="{{$area}} {{(old('work_area') === $area->value) ? 'selected':''}}">{{$area}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="employee-salary" class="form-label">Salary</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">$</span>
                            <input type="number" class="form-control" id="salary" name="salary" placeholder="Enter employee salary" value="{{old('salary')}}">
                        </div>
                    </div>
                    <!--Validaciones-->
                    @if($errors -> any())
                        <div class="alert alert-danger col-12 mt-4">
                            <ul>
                                @foreach($errors -> all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="col-12 my-4">
                        <div class="d-grid gap-4">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-12 mb-4">
                <div class="d-grid gap-2">
                    <a href="{{route('employees.index')}}" class="btn btn-danger">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
