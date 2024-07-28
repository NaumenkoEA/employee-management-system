<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    public function run(): void
    {
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

        foreach ($departments as $departmentName) {
            Department::create(['name' => $departmentName]);
        }
    }
}
