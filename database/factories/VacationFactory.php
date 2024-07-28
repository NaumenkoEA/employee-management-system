<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Vacation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Vacation>
 */
class VacationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('ru_RU');

        $startDate = $faker->dateTimeBetween('-3 year', 'now');

        $endDate = $faker->dateTimeBetween($startDate, '+40 days');

        return [
            'employee_id' => Employee::inRandomOrder()->first()->id,
            'start_date' => $startDate->format('Y-m-d'),
            'end_date' => $endDate->format('Y-m-d'),
            'reason' => $faker->sentence,
        ];
    }
}
