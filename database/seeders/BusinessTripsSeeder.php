<?php

namespace Database\Seeders;

use App\Models\BusinessTrip;
use Illuminate\Database\Seeder;

class BusinessTripsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BusinessTrip::factory()->count(10)->create();
    }
}
