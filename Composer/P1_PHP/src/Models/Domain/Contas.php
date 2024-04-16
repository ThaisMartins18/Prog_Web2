<?php

namespace Gatos\Models\Domain;

class Contas{

    private $descricao;
    private $categoria;

    public function __construct($descricao, $categoria){
        $this->setDescricao($descricao);
        $this->setCategoria($categoria);
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        return $this->descricao = $descricao;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }


}