<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Department::class;

    public function definition(): array
    {
        $faker = \Faker\Factory::create('ru_RU');

        $departments = [
            'Отдел маркетинга',
            'Отдел продаж',
            'Бухгалтерия',
            'HR отдел',
            'IT отдел',
            'Юридический отдел',
            'Отдел логистики',
            'Производственный отдел',
            'Отдел закупок',
            'Отдел обслуживания клиентов',
        ];

        return [
            'name' => $faker->randomElement($departments),
        ];
    }
}
