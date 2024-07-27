<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Position>
 */
class PositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Position::class;

    public function definition(): array
    {
        $faker = \Faker\Factory::create('ru_RU');

        // Список возможных должностей
        $positions = [
            'Менеджер',
            'Разработчик',
            'Аналитик',
            'Бухгалтер',
            'Специалист по продажам',
            'HR-менеджер',
            'Юрист',
            'Инженер',
            'Секретарь',
            'Рекрутер',
            'Директор'
        ];

        return [
            'title' => $faker->randomElement($positions),
        ];
    }
}
