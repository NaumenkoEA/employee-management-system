<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DepartmentsSeeder::class,
            PositionsSeeder::class,
            EmployeeSeeder::class,
            BusinessTripsSeeder::class,
            SickLeavesSeeder::class,
            VacationSeeder::class,
        ]);
    }
}
