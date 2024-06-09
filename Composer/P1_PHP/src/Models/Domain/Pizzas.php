<?php

namespace Gatos\Models\Domain;

class Pizzas{

    private $id;
    private $sabor;
    private $peso;

    public function __construct($id, $sabor, $peso){
        $this->setId($id);
        $this->setSabor($sabor);
        $this->setPeso($peso);
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
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