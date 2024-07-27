<?php

namespace Database\Factories;

use App\Models\BusinessTrip;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<BusinessTrip>
 */
class BusinessTripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = BusinessTrip::class;

    public function definition(): array
    {
        $faker = \Faker\Factory::create('ru_RU');

        $startDate = $faker->dateTimeBetween('-3 year', 'now');

        $endDate = $faker->dateTimeBetween($startDate, '+2 months');

        return [
            'employee_id' => Employee::factory(),
            'start_date' => $startDate->format('Y-m-d'),
            'end_date' => $endDate->format('Y-m-d'),
            'goal_business_trip' => $faker->sentence,
            'country' => $faker->country,
            'city' => $faker->city,
        ];
    }
}
