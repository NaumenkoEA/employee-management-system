<?php

namespace Database\Seeders;

use App\Models\SickLeave;
use Illuminate\Database\Seeder;

class SickLeavesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SickLeave::factory()->count(10)->create();
    }
}
