<?php

namespace Gatos\Models\Domain;

class Contas{

    private $id;
    private $descricao;
    private $categoria;

    public function __construct($id, $descricao, $categoria){
        $this->setId($id);
        $this->setDescricao($descricao);
        $this->setCategoria($categoria);
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
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