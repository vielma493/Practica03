<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Periodo>
 */
class PeriodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $per = array('ENE-JUN 24','AGO-DIC 24');
        return [
            'idperiodo'=>fake()->bothify(),
            'periodo'=>fake()->randomElement($per),
            'desccorta'=>fake()->randomElement(['Periodo 1 2024', 'Periodo 2 2024']),
            'fechaini'=>fake()->randomElement(['2024/01/19', '2024/08/22']),
            'fechafin'=>fake()->randomElement(['2024/06/08', '2024/12/04'])
        ];
    }
}
