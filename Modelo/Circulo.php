<?php
/**
 * Created by PhpStorm.
 * User: Alex portatil
 * Date: 04/10/2016
 * Time: 17:39
 */

namespace Modelo;

require_once 'Punto.php';
class Circulo
{
    private $orig;
    private $ra;

   public function __construct(Punto $orig, $ra)
   {
       $this->orig =$orig;
       $this->ra =$ra;
   }

   public function Getorig(){
       return $this->orig;
   }

   public function getra(){
       return $this->ra;
   }

   public function setOrig($orig){
        $this->orig = (int) $orig;
       return $this;
   }

    public function setRa($ra)
    {
        $this->ra = (int)$ra;
        return $this;
    }


}