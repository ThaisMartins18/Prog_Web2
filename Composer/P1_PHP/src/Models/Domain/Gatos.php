<?php

namespace Gatos\Models\Domain;

class Gatos{

    private $id;
    private $cor_pelagem;
    private $cor_olhos;


    public function __construct($id, $cor_pelagem, $cor_olhos){
        $this->setId($id);
        $this->setCorPelagem($cor_pelagem);
        $this->setCorOlhos($cor_olhos);
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getCorPelagem(){
        return $this->cor_pelagem;
    }

    public function setCorPelagem($cor_pelagem){
        return $this->cor_pelagem = $cor_pelagem;
    }

    public function getCorOlhos(){
        return $this->cor_olhos;
    }

    public function setCorOlhos($cor_olhos){
        $this->cor_olhos = $cor_olhos;
    }

}