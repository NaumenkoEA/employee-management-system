<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
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
    protected $model = Employee::class;

    public function definition(): array
    {
        $faker = \Faker\Factory::create('ru_RU');

        $department = Department::inRandomOrder()->first();
        $position = Position::inRandomOrder()->first();


        $gender = $faker->randomElement(['male', 'female']);

        $firstName = $gender === 'male' ? $faker->firstNameMale : $faker->firstNameFemale;
        $lastName = $gender === 'male' ? $faker->lastNameMale : $faker->lastNameFemale;
        $middleName = $gender === 'male' ? $faker->middleNameMale : $faker->middleNameFemale;
        return [


            'last_name' => $lastName,
            'first_name' => $firstName,
            'middle_name' => $middleName,
            'position_id' => $position->id,
            'department_id' => $department->id,
            'hire_date' => $faker->dateTimeBetween('-20 years', '-1 years')->format('Y-m-d'),
            'salary' => $faker->numberBetween(30000, 100000),
            'phone' => $faker->phoneNumber,
            'email' => $faker->email,
            'birth_date' => $faker->dateTimeBetween('-40 years', '-18 years')->format('Y-m-d'),
            'gender' => $gender,
            'address' => $faker->address,
        ];
    }
}
