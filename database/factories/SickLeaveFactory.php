<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\SickLeave;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<SickLeave>
 */
class SickLeaveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = SickLeave::class;

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
