<?php

namespace Database\Seeders;

use App\Models\Vacation;
use Illuminate\Database\Seeder;

class VacationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vacation::factory()->count(10)->create();
    }
}
