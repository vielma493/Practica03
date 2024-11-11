<?php

namespace Database\Factories;

use App\Models\Depto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carreras>
 */
class CarreraFactory extends Factory
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
        $carr = [
            ['1','Ingenieria en sistemas computacionales','Ing sist. comp.','ISC','3'],
            ['2','Ingenieria electronica','Ing elect.','IE','4'],
            ['3','Ingenieria mecanica','Ing mec.','IM','4'],
            ['4','Ingenieria mecatronica','Ing mecatr.','IME','4'],
            ['5','Contador publico','Cont. Pub.','CP','6'],
            ['6','Ingenieria en gestion empresarial','Ing gest emp.','IGE','5'],
            ['7','Ingenieria industrial','Ing ind.','II','5']
        ];
        return [
            "idcarrera"=>$carr[$indice][0],
            "nombrecarrera"=>$carr[$indice][1],
            "nombremediano"=>$carr[$indice][2],
            "nombrecorto"=>$carr[$indice][3],
            "depto_id" => $carr[$indice][4],
        ];
    }
}
