<?php

namespace Database\Seeders;

use App\Models\Carrera;
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
        Carrera::factory(7)->create();

    }
}
