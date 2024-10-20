<?php

namespace Database\Seeders;

use App\Models\Carreras;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarrerasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Carreras::factory(5)->create();

    }
}
