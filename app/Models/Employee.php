<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected  $primaryKey = 'id_employee';

    protected $fillable = [
        'name',
        'last_name',
        'birth_date',
        'email',
        'phone',
        'gender',
        'address',
        'city',
        'department',
        'work_area',
        'salary'
    ];
}
