<?php

namespace P1_PHP\Controllers;

use P1_PHP\Models\DAO\GatosDAO;
use P1_PHP\Models\Domain\Gatos;

class GatosController{
    public function inserir($params){
        require_once("../src/Views/gatos/inserir_gatos.html");
    }

    public function novo($params){
        $gatos = new Gatos(0, $_POST['cor_pelagem'],['cor_olhos']);
        $gatosDAO = new GatosDAO();
        if ($gatosDAO->inserir($gatos)){
            return "Inserido com sucesso!";
        }   else    {
            return "Erro ao inserir!";
        }
    }
}