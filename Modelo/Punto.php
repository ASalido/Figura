<?php


namespace Modelo;


class Punto
{
    // con private creamos las variables de caracter privado y todos deben llevar $ junto a la variable siempre
    private $x;
    private $y;

    // ahora creamos el contructor
    public function __construct($x,$y)
    {
        // this equivale a al me. de visual basic.
        $this->setX($x);
        $this->setY($y);
    }

    // creamos la funcion desplazar que no seria la correcta aunque se pueda usar.
    public function desplazar( punto $destino)
    {
        //Con esto directamente desplazamos los puntos donde nosotros querramos.

        $this->setX($destino->getX());
        $this->setY($destino->getY());
    }

    //vamos a crear un getter.

    public function getX()
    {
        // getter para modificar las variables X o Y.
        return $this->x;
    }

    // Con esto creamos un getter Y
    public function getY()
    {
        return $this->y;
    }

    public function setX($x)
    {
        // Con el int obligamos a convertir en integer la variable
        $this->x = (int) $x;
        return $this;
    }

    public function setY($y)
    {
        $this->y = (int) $y;
        return $this;
    }

    function __toString()
    {
        return 'punto{' . $this->getX() . ', ' . $this->getY() . '}' . '<br>';
    }

    public function esIgual($p)
    {
        if ($p->getX()== $this->getX() && $p->getY() == $this->getY()) {
            return true;
        }
            return false;
        // return ($p->getX()== $this->getX() && $p->getY() == $this->getY())? true:false;

    }

    public function Cuadrante($p)
    {
        if ($this->getX() > 0 && $this->getY()> 0){
            return $c = 1;
        }elseif($this->getX() < 0 && $this->getY() > 0){
            return $c =2;
        }elseif($this->getX() < 0 && $this->getY() < 0){
            return $c = 3;
        }else{
            return $c=4;
        }
    }

    public function Mover($q)
    {
        $c = $this->Cuadrante($q);
        if ($q == 1){
            if ($c == 2){
                $this->setX($this->getX()*(-1));
            }elseif($c == 3){
                $this->setX($this->getX()*(-1));
                $this->setY($this->getY()*(-1));
            }elseif($c == 4){
                $this->setY($this->getY()*(-1));
            }
        }elseif($q == 2){
            if ($c == 1){
                $this->setX($this->getX()*(-1));
            }elseif($c == 3){
                $this->setY($this->getY()*(-1));
            }elseif ($c== 4){
                $this->setX($this->getX()*(-1));
                $this->setY($this->getY()*(-1));
            }
        }elseif($q == 3){
            if ($c == 1){
                $this->setX($this->getX()*(-1));
                $this->setY($this->getY()*(-1));
            }elseif($c == 2){
                $this->setY($this->getY()*(-1));
            }elseif ($c== 4){
                $this->setX($this->getX()*(-1));
            }
        }else{
            if ($c == 1){
                $this->setY($this->getY()*(-1));
            }elseif($c == 2){
                $this->setY($this->getY()*(-1));
                $this->setX($this->getX()*(-1));
            }elseif ($c== 3){
                $this->setX($this->getX()*(-1));
            }
        }
      /*  if($q == 1){
            if ($this->getX() < 0){
                $this->setX($this-> getX()*(-1));
            }
            if ($this-> getY() < 0){
                $this-> setY($this-> getY()*(-1));
            }
        }elseif ($q == 2){
            if ($this-> getX() > 0){
                $this-> setX($this-> getX()*(-1));
            }
            if ($this-> getY() < 0){
                $this-> setY($this-> getY()*(-1));
            }
        }elseif($q == 3){
            if ($this-> getX() > 0){
                $this-> setX($this-> getX()*(-1));
            }
            if ($this-> getY() > 0){
                $this-> setY($this-> getY()*(-1));
            }
        }else{
            if ($this-> getX() < 0){
                $this-> setX($this-> getX()*(-1));
            }
            if ($this-> getY() > 0){
                $this->setY($this-> getY()*(-1));
            }
        }*/


        return $q;
    }
}