<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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

        foreach ($positions as $positionsTitle) {
            Position::create(['title' => $positionsTitle]);
        }
    }
}
