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
        return [
            'employee_id' => Employee::factory(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'goal_business_trip' => $this->faker->sentence,
            'country' => $this->faker->country,
            'city' => $this->faker->city,
        ];
    }
}
