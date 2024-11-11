<?php

namespace Database\Factories;

use App\Models\Personal;
use App\Models\Plazas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PersonalPlaza>
 */
class PersonalPlazaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'tiponombramiento'=>fake()->bothify("##"),
            'plaza_id' =>Plazas::factory(),
            'personal_id'=>Personal::factory()
        ];
    }
}
