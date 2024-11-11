<?php

namespace Database\Seeders;

use App\Models\PersonalPlaza;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonalPlazaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         PersonalPlaza::factory(1)->create();
    }
}
