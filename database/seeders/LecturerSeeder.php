<?php

namespace Database\Seeders;

use App\Models\lectures;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        lectures::factory(10)->create();
    }
}