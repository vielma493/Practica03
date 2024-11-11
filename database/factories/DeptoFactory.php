<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Depto>
 */
class DeptoFactory extends Factory
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
        $dept =[
            ['1','Direccion','Direcc.','Dir.'],
            ['2','Subdireccion','Subdir','Sub.'],
            ['3','Sistemas y Computacion','Sist. Comp.','S Y C'],
            ['4','Ingenieria electrica y Electronica','Ing elect y electro.','IEE'],
            ['5','Ingenieria industrial','Ing ind.','II'],
            ['6','Ciencias economico-Administrativas','C. Eco. y Admin.','CE Y A']
        ];
        return [
            "iddepto"=>$dept[$indice][0],
            "nombredepto"=>$dept[$indice][1],
            "nombremediano"=>$dept[$indice][2],
            "nombrecorto" =>$dept[$indice][3],
        ];
    }
}
