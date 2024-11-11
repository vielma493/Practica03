<?php

namespace Database\Factories;

use App\Models\Carrera;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reticula>
 */
class ReticulaFactory extends Factory
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

        $retic=[
            ['1','Reticula Sistemas','2021-03-01','1'],
            ['2','Reticula industrial','2021-03-01','7'],
            ['3','Reticula electronica','2021-03-01','2'],
            ['4','Reticula Mecanica','2021-03-01','3'],
            ['5','Reticula gestion empresarial','2021-03-01','6'],
            ['6','Reticula mecatronica','2021-03-01','4'],
            ['7','Contador Publico','2021-03-01','5']
        ];

        return [
            'idreticula'=>$retic[$indice][0],
            'descripcion'=>$retic[$indice][1],
            'fechaenvigor'=>$retic[$indice][2],
            'carrera_id' =>$retic[$indice][3]
        ];
    }
}
