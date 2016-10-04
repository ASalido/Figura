<?php
/**
 * Created by PhpStorm.
 * User: Alex portatil
 * Date: 23/09/2016
 * Time: 17:58
 */

namespace AppFigura;

use Modelo\Punto;
require_once '../Modelo/Punto.php';

class App
{
    //Con esto creamos un metodo statico.
    public static function run ()
    {
        $p = new Punto(0,0);
        echo $p;
        $p->setX(2);
        $p->setY(3);
        echo $p;
        $p1 = new Punto(10,0);

        //$p->desplazar($p1);
        echo $p1;

        if ($p->esIgual($p1)){
            echo '<br>' . 'Son iguales';
        }else{
            echo '<br>' . 'Son diferentes';
        }

        $q =4;

        $p->Mover($q);
        echo $p;
    }
}

App::run();