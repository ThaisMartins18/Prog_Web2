<?php

namespace Gatos\Models\Domain;

class Pizzas{

    private $sabor;
    private $peso;

    public function __construct($sabor, $peso){
        $this->setSabor($sabor);
        $this->setPeso($peso);
    }

    public function getSabor(){
        return $this->sabor;
    }

    public function setSabor($sabor){
        return $this->sabor = $sabor;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }

}