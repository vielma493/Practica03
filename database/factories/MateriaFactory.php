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

        static $indice=-1;
        $indice++;

        $mat = [
            ['Fundamentos de programacion','1','Fund de prog.','FDP','Presencial','1'],
            ['Matematicas discretas','1','Mate. discr.','MAT D','Presencial','1'],
            ['Calculo diferencial','1','Calc Dif','CD','Presencial','1'],

            ['Programacion Orientada a Objetos','2','Prog. Or. Obj.','POO','Presencial','1'],
            ['Contabilidad financiera','2','Cont Financ.','CF','Presencial','1'],
            ['Calculo integral','2','Calc Int.','CI','Presencial','1'],

            ['Estructura de datos','3','Estruc. datos','ED','Presencial','1'],
            ['Sistemas operativos','3','Sist Op','SO','Presencial','1'],
            ['Calculo vectorial','3','Calc Vect.','CV','Presencial','1'],

            ['Topicos avanzados de programacion','4','Top avanz prog.','TAP','Presencial','1'],
            ['Fundamentos de bases de datos','4','Fund base datos','FBD','Presencial','1'],
            ['Taller de sistemas operativos','4','Taller SO','TSO','Presencial','1'],

            ['Fundamentos de telecomunicaciones','5','Fund Telecom.','FDT','Presencial','1'],
            ['Taller de base de datos','5','Taller BD','TBD','Presencial','1'],
            ['Fundamentos de ingenieria de software','5','Fund. de ing soft.','FD IGS','Presencial','1'],

            ['Lenguajes y automatas','6','Leng y autom.','LYA','Presencial','1'],
            ['Redes de computadoras','6','Red comp','RYC','Presencial','1'],
            ['Administracion de bases de datos','6','Admin BD','ABD','Presencial','1'],

            ['Taller de investigacion I','7','Taller inv. I','TI I','Presencial','1'],
            ['Interfaces graficas de usuario','7','Inter. graf.','IGU','Presencial','1'],
            ['Programacion WEB II','7','Program. WEB II','PROWEB II','Presencial','1'],
 
            ['Administracion de redes','8','Admin Red','ADR','Presencial','1'],
            ['Taller de investigacion II','8','Taller Inv. II','TI II','Presencial','1'],
            ['Base de datos con ORM','8','B de datos ORM','BD ORM','Presencial','1'],
 

            ['Inteligencia artificial','9','Int artif.','IA','Presencial','1'],
            ['Programacion movil multiplataforma','9','Prog Mov. Multi','PMM','Presencial','1'],
            ['Residencia profesional','9','Resid. Prof.','RP','Presencial','1'],
 
  
            ['Dibujo industrial','1','Dib Ind','DI','Presencial','2'],
            ['Taller de herramientas intelectuales','1','Taller HI','THI','Presencial','2'],
            
            ['Propiedad de los materiales','2','Prop de los Mat.','PM','Presencial','2'],
            ['Probabilidad y estadistica','2','Probab y Est','PYE','Presencial','2'],

            ['Metrologia y normalizacion','3','Metr y norma.','MYN','Presencial','2'],
            ['Economia','3','Econ.','EC','Presencial','2'],
            
            ['Procesos de fabricacion','4','Proc de fabr.','PF','Presencial','2'],
            ['Investigacion de operaciones','4','Inv de op','IO','Presencial','2'],
            
            ['Administracion de proyectos','5','Admin de proy.','ADP','Presencial','2'],
            ['Gestion de costos','5','Gest de cost.','GC','Presencial','2'],
            
            ['Mercadotecnia','6','Merca.','MT','Presencial','2'],
            ['Administracion del mantenimiento','6','Admin del Mant.','ADM','Presencial','2'],
            
            ['Planeacion financiera','7','Plan financ.','PF','Presencial','2'],
            ['Sistemas de manufactura','7','Sist de man.','SM','Presencial','2'],
            
            ['Relaciones industriales','8','Relac Ind.','RI','Presencial','2'],
            ['Topicos de calidad','8','Topic cal.','TC','Presencial','2'],
            
            ['Emprendimiento e innovacion','9','Empr e innov.','EI','Presencial','2'],
            ['Medicion y mejoramiento de la productividad','9','Med y mejor. de la prod.','MMP','Presencial','2'],
            
            
        ];



        return [
            'idmateria' =>fake()->bothify('??##'),
            'nombremateria' =>$mat[$indice][0],
            'nivel'=>$mat[$indice][1],
            'nombremediano'=>$mat[$indice][2],
            'nombrecorto'=>$mat[$indice][3],
            'modalidad' =>$mat[$indice][4],
            'reticula_id' =>$mat[$indice][5]

        ];
    }
}
