<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Edificio>
 */
class EdificioFactory extends Factory
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
        $edificio =[
             ['Edificio K','Ed K'],
             ['Laboratorio de electronica','Lab Elect.'],
             ['Sistemas y computacion','S Y C'],
             ['Laboratorio de computo industrial','Lab. Comp. Ind.'],
             ['Edificio de ingenieria industrial','Ed ING IND'],
             ['Centro de idiomas','C. I'],
             ['Laboratorio de quimica','LAB QUIM'],
             ['Edificio H','ED H'],
             ['Edificio D','ED D'],
             ['Sala de computo multifuncional Ciencias basicas y laboratorio de Fisica','COMP Multi'],
             ['Edificio administrativo','ED Admin'],
             ['Gestion tecnologica y vinculacion','GT Y V'],
             ['Sala de vinculacion','S. Vinc.'],
             ['Servicios escolares, Division de Estudios Profesionales','SE, DIV EP'],
             ['Centro de computo','C de Comp.'],
             ['Actividades extraescolares','Act Ext.'],
             ['Recursos materiales y servicios','Rec mat. y S.'],
             ['Sala de titulacion','SL Tit.'],
             ['Ciencias basicas','C. Basic.'],
             ['Cubicos Ciencias Basicas','Cubic C. B.']
                    
        ];
        return [
             'nombreedificio' =>$edificio[$indice][0],
             'nombrecorto'=>$edificio[$indice][1],

        ];
    }
}
