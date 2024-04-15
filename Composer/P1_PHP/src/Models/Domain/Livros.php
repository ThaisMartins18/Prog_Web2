<?php

namespace Livros\Models\Domain;

class Livros{

    private $titulo;
    private $autor;

    public function __construct($titulo, $autor){
        $this->setTitulo($titulo);
        $this->setAutor($autor);
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