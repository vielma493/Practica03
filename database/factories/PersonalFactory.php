<?php

namespace Database\Factories;

use App\Models\Depto;
use App\Models\Puesto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personal>
 */
class PersonalFactory extends Factory
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
        $lic = array('Ing. en sistemas computacionales');
        $sn = array('Si','No');
        $docente = [
            ['Antonio', 'Chavez', 'Soto','1997-09-23','2003-03-10','3','1'],
            ['Lourdes Arlin', 'Campoy', 'Medrano','1994-11-02', '2001-06-15','3','1'],
            ['Hilda Patricia', 'Beltran', 'Hernandez','1997-04-15', '2003-11-23','3','1'],
            ['Miguel Arturo', 'Velez', 'Riojas','1998-06-19', '2002-08-04','3','1'],
            ['David Sergio', 'Castillon', 'Dominguez','1983-06-19', '1993-08-04','3','1'],
            ['Silvia Angelica', 'Espinoza', 'Meza','1998-06-19', '2000-08-04','3','1'],
            ['Guadalupe', 'Uribe', 'Miranda','1995-09-03', '2004-01-10','3','1'],
            ['Juan Ramon', 'Olague', 'Sanchez','1989-11-10', '1996-02-17','3','1'],
            ['Arturo', 'Aguilera', 'Vazquez','2006-04-15', '2009-11-23','3','1'],
            ['Flor De Maria', 'Rivera', 'Sanchez','1993-08-11', '2002-03-20','3','1'],
            ['Gustavo Emilio', 'Rojo', 'Velazquez','1993-08-11','2023-09-25','1','4'],
            ['Ulises', 'Valdez', 'Rodriguez','1990-05-14', '1991-07-21','2','5'],
            ['Carlos', 'Patino', 'Chavez','1994-11-02', '1995-06-15','2','5']
        ];
        $esp = array('Ciberseguridad','Redes y Telecomunicaciones','Ingeniería de Software','Bases de Datos y Administración de Datos','Desarrollo de Software y Aplicaciones');
        $doc = array('Psicología','Educación','Ciencias de la Comunicación','Administración de Empresas');


        return [

            'RFC'=>fake()->bothify("???????######"),
            'nombres' => $docente[$indice][0],
            'apellidop' => $docente[$indice][1],
            'apellidom' => $docente[$indice][2],
            'licenciatura'=>fake()->randomElement($lic),
            'lictit'=>fake()->randomElement($sn),
            'especializacion'=>fake()->randomElement($esp),
            'esptit'=>fake()->randomElement($sn),
            'maestria'=>fake()->randomElement($esp),
            'maetit'=>fake()->randomElement($sn),
            'doctorado'=>fake()->randomElement($doc),
            'doctit'=>fake()->randomElement($sn),
            'fechaingsep'=>$docente[$indice][3],
            'fechaingins'=>$docente[$indice][4],
            'depto_id' =>$docente[$indice][5],
            'puesto_id'=>$docente[$indice][6]

        ];
    }
}
