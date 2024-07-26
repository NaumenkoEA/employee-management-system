<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->name,
            'last_name' => $this->faker->lastName,
            'position' => $this->faker->jobTitle,
            'hire_date' => $this->faker->date(),
            'salary' => $this->faker->numberBetween(30000, 100000),
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'birth_date' => $this->faker->date,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'address' => $this->faker->address,
        ];
    }
}
