<?php

namespace Gatos\Controllers;

use Gatos\Models\DAO\GatosDAO;
use Gatos\Models\Domain\Gatos;

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