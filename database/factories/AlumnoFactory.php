<?php

namespace Database\Factories;

use App\Models\Carrera;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
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

$alum = [

['21430359','Luis','Reyes','Vielma','M','L21430359@piedrasnegras.tecnm.mx','1'],

['21430366','Issac','Sanchez','Lezama','M','L21430366@piedrasnegras.tecnm.mx','1'],

['21430394','Alonso','Cardenas','Galan','M','L21430394@piedrasnegras.tecnm.mx','1'],

['21430318','Juanalberto','Aguirre','Cruz','M','L21430318@piedrasnegras.tecnm.mx','1'],

['21430344','Fernando','Hernandez','Alvarez','M','L21430318@piedrasnegras.tecnm.mx','1'],

['21430011','Jesus Ivan','Lizerio','Rodriguez','M','L21430011@piedrasnegras.tecnm.mx','5'],

['20430026','Josue','Dominguez','Reyes','M','L20430026@piedrasnegras.tecnm.mx','5'],

['23430009','Brisa Cristal','Hernandez','Sanchez','F','L23430009@piedrasnegras.tecnm.mx','5'],

['23430003','Daniela','Balderas','Ortiz','F','L23430003@piedrasnegras.tecnm.mx','5'],

['23430010','Lizeth','Mora','Infante','F','L23430010@piedrasnegras.tecnm.mx','5'],

['21430256','Rolando','Espinoza','Vela','M','L21430256@piedrasnegras.tecnm.mx','4'],

['21430250','Emanuel Adoniram','Cepeda','Veloz','M','L21430250@piedrasnegras.tecnm.mx','4'],

['21430266','Guillermo Elias','Iglesias','Velazquez','M','L21430266@piedrasnegras.tecnm.mx','4'],

['21430270','Luis Fernando','Lopez','Velazquez','M','L21430270@piedrasnegras.tecnm.mx','4'],

['22430177','Angel Francisco','Perez','Sanchez','M','L22430177@piedrasnegras.tecnm.mx','4'],

['21430052','Angel Enrique','Peña','Huitron','M','L21430052@piedrasnegras.tecnm.mx','2'],

['21430043','Samuel','Flores','Ibarra','M','L21430043@piedrasnegras.tecnm.mx','2'],

['21430041','Emmanuel Alejandro','De Santiago','Lomas','M','L21430041@piedrasnegras.tecnm.mx','2'],

['21430035','Juan Pablo','Cedillo','Ramirez','M','L21430035@piedrasnegras.tecnm.mx','2'],

['22430235','Ramon Eduardo','Perez','Sanchez','M','L21430235@piedrasnegras.tecnm.mx','2'],


];
        return [
            'noctrl'=>$alum[$indice][0],
            'nombre'=>$alum[$indice][1],           
            'apellidop' => $alum[$indice][2],
            'apellidom' => $alum[$indice][3],
            'sexo' =>$alum[$indice][4],
            'email' => $alum[$indice][5],
            'carrera_id' =>$alum[$indice][6]
        ];
    }
}
