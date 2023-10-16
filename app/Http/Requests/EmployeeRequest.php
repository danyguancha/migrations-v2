<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use App\Enums\Work_areas;

class employeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'last_name' => ['required','string','max:255'],
            'birth_date' => ['required','date'],
            'email' => ['required','email','max:255'],
            'phone' => ['required','string','max:12'],
            'gender' => ['required','string','max:2'],
            'address' => ['required','string','max:255'],
            'city' => ['required','string','max:255'],
            'department' => ['required','string','max:255'],
            'work_area' => [new Enum(Work_areas::class)],
            'salary' => ['required','numeric']


        ];
    }

     /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages():array
    {
        return [
            'name.required' => 'El nombre del trabajador es requerido',
            'last_name.required' => 'El apellido del trabajador es requerido',
            'birth_date.required' => 'La fecha de nacimiento del trabajador es requerida',
            'email.required' => 'El correo electrónico del trabajador es requerido',
            'phone.required' => 'El telefno del trabajador es requerido',
            'gender.required' => 'El género del trabajador es requerido',
            'address.required' => 'La dirección del trabajador es requerida',
            'city.required' => 'La ciudad del trabajador es requerida',
            'department.required' => 'El departamento del trabajador es requerido',
            'work_area.required' => 'El área de trabajo del trabajador es requerida',
            'salary.required' => 'El salario del trabajador es requerido'

        ];
    }
}
