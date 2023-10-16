@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="alert alert-info text-center">Edit employee {{$employee->name}}</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('employees.update',$employee) }}" method="post" class="row">
                    @csrf <!-- cross site request forgery -->
                    @method('PUT')
                    <div class="col-6">
                        <label for="employee-name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name',$employee->name)}}" placeholder="Enter employee name">
                    </div>
                    <div class="col-6">
                        <label for="employee-last-name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{old('last_name',$employee->last_name)}}" placeholder="Enter employee last name">
                    </div>
                    <div class="col-6">
                        <label for="employee-birth-date" class="form-label">Birth Date</label>
                        <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{old('birth_date',$employee->birth_date)}}" placeholder="Enter employee birth date">
                    </div>
                    <div class="col-6">
                        <label for="employee-email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email',$employee->email)}}" placeholder="Enter employee email">
                    </div>
                    <div class="col-6">
                        <label for="employee-phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone',$employee->phone)}}" placeholder="Enter employee phone">
                    </div>
                    <div class="col-6">
                        <label for="employee-gender" class="form-label">Gender</label>
                        <input type="text" class="form-control" id="gender" name="gender" value="{{old('gender',$employee->gender)}}" placeholder="Enter employee gender">
                    </div>
                    <div class="col-6">
                        <label for="employee-address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{old('address',$employee->address)}}" placeholder="Enter employee address">
                    </div>
                    <div class="col-6">
                        <label for="employee-city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city" value="{{old('city',$employee->city)}}" placeholder="Enter employee city">
                    </div>
                    <div class="col-6">
                        <label for="employee-department" class="form-label">Department</label>
                        <input type="text" class="form-control" id="department" name="department" value="{{old('department',$employee->department)}}" placeholder="Enter employee department">
                    </div>
                    <div class="col-6">
                        <label for="employee-work-area" class="form-label">Work Area</label>
                        <select name="work_area" id="work_area" class="form-control">
                            @foreach($works_area as $area)
                              <option value="{{$area}}" {{(old($employee->work_area)===$area->value) ? 'selected':''}}>{{$area}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="employee-salary" class="form-label">Salary</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">$</span>
                            <input type="number" class="form-control" id="salary" name="salary" value="{{old('salary',$employee->salary)}}" placeholder="Enter employee salary">
                        </div>
                    </div>
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
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Edit</button>
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
