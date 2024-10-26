<?php

namespace Database\Factories;

use App\Models\Reticula;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Materia>
 */
class MateriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $palabras = ['Programacion WEB', 'Taller de base de datos', 'Calculo Vectorial', 'Proweb II', 'Interfaces graficas', 'Gestion de proyectos', 'Simulacion'];
        $mod = ['En linea','Presencial'];
        $nomMed = ['Progamac Web','Taller BD','Calc Vect'];
        $nomCorto =['Proweb','TBD','CV'];
        return [
            'idmateria' =>fake()->bothify(),
            'nombremateria' =>fake()->randomElement($palabras),
            'nivel'=>fake()->randomNumber(1),
            'nombremediano'=>fake()->randomElement($nomMed),
            'nombrecorto'=>fake()->randomElement($nomCorto),
            'modalidad' =>fake()->randomElement($mod),
            'reticula_id' =>Reticula::factory()

        ];
    }
}
