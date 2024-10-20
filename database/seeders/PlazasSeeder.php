<?php

namespace Database\Seeders;

use App\Models\Plazas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlazasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plazas::factory(10)->create();
    }
}
