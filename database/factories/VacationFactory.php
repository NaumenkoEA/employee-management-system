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
        return [
            'employee_id' => Employee::factory(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'reason' => $this->faker->sentence,
        ];
    }
}
