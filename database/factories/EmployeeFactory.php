<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */
    protected $model = Employee::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name(),
            'last_name'=> $this->faker->lastName(),
            'birth_date'=> $this->faker->date(),
            'email'=> $this->faker->safeEmail(),
            'phone'=> $this->faker->phoneNumber(),
            'gender'=> $this->faker->randomElement(['M', 'F']),
            'address'=> $this->faker->streetAddress(),
            'city'=> $this->faker->city(),
            'department'=> $this->faker->word(),
            'work_area'=> $this->faker->randomElement(['Administrative', 'Operative',
            'Management', 'Finance', 'Human Resources',
            'Marketing', 'Sales', 'Logistics',
            'Customer Service', 'Information Technology']),
            'salary'=> $this->faker->numberBetween(1000000, 5000000),
        ];
    }
}
