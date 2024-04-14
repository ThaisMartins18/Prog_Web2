<?php

namespace Gatos\Models\Domain;

class Gatos{

    private $cor_pelagem;
    private $cor_olhos;

    public function __construct($cor_pelagem, $cor_olhos){
        $this->setCorPelagem($cor_pelagem);
        $this->setCorOlhos($cor_olhos);
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