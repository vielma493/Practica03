<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plazas>
 */
class PlazasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $indice =-1;
        $indice++;
        $p = ['E3817','E3815','E3717','E3617','E3520'];
        return [
            'idplaza'=>fake()->bothify("???##"),
            'nombrePlaza'=>$p[$indice]
        ];
    }
}
