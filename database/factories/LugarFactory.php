<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lugar>
 */
class LugarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $indice = -1;
        $indice++;
        
        $lug=
        [
            ['Sala Laboratorio de computo C','SLCC','3'],
            ['Sala Valerdi','SVD','3'],
            ['Sala Laboratorio de computo D','LCD','3'],
            ['Sala Laboratorio de computo R','LCR','3'],
            ['Sala Laboratorio de computo E','LCE','3'],
            
            ['Aula 1K','1K','1'],
            ['Aula 2K','2K','1'],
            ['Aula 3K','3K','1'],
            ['Aula 5K','5K','1'],
            ['Aula 6K','6K','1'],
            ['Aula 7K','7K','1'],
            ['Aula 8K','8K','1'],
            ['Aula 9K','9K','1'],
            ['Aula 10K','10K','1'],
            ['Aula 11K','11K','1'],
            ['Aula 12K','12K','1'],
            ['Aula 13K','13K','1'],
            ['Aula 14K','14K','1'],

            ['Aula 1D','1D','9'],
            ['Aula 2D','2D','9'],
            ['Aula 3D','3D','9'],
            ['Aula 4D','4D','9'],
            ['Aula 5D','5D','9'],
            ['Aula 6D','6D','9'],
            ['Aula 7D','7D','9'],
            ['Aula 8D','8D','9'],



            
        ];

        return [
            'nombrelugar' =>$lug[$indice][0],
            'nombrecorto'=>$lug[$indice][1],
            'edificio_id'=>$lug[$indice][2],
            
        ];
    }
}
