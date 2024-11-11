<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Puesto>
 */
class PuestoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $indice=-1;
        $indice++;

        $puest =[
            ['11','Profesor Titular','Docente'],
            ['12','Profesor asociado','Docente'],
            ['13','Profesor asistente','Docente'],

            ['21','Director','Direccion'],
            ['22','Subdirector','Direccion'],
            ['23','Coordinador de depto','Direccion'],

            ['31','Bibliotecario','No docente'],
            ['32','Orientador','No docente'],
            ['33','Intendente','No docente'],

            ['41','Auxiliar de docencia','Auxiliar'],
            ['42','Auxiliar de laboratorio','Auxiliar'],
            ['43','Ayudante de aula','Auxiliar'],

            ['51','Secretario','Administrativo'],
            ['52','Tesorero','Administrativo'],
            ['53','Asistente administrativo','Administrativo'],


            
        ];
        return [
            'idpuesto'=>$puest[$indice][0],
            'nombrePuesto'=>$puest[$indice][1],
            'tipo'=>$puest[$indice][2]
        ];
    }
}
