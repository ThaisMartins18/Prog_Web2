<?php

namespace Gatos\Models\Domain;

class Categoria{

    private $id;
    private $descricao;

    public function __construct($id, $descricao){
        $this->setId($id);
        $this->setDescricao($descricao);
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        return $this->id = $id;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }


}