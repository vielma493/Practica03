<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Depto;
use App\Models\Carreras;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Depto::factory(1)->has(
            Carreras::factory(3)->has(
                Alumno::factory(4)
            )
        )->create();


    }
}
