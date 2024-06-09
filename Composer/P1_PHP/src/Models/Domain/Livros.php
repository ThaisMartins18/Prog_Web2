<?php

namespace Gatos\Models\Domain;

class Livros{

    private $id;
    private $titulo;
    private $autor;

    public function __construct($id, $titulo, $autor){
        $this->setId($id);
        $this->setTitulo($titulo);
        $this->setAutor($autor);
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
    
    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        return $this->titulo = $titulo;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

}