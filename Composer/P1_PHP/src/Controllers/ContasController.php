<?php

namespace Gatos\Controllers;

use Contas\Models\DAO\ContasDAO;
use Contas\Models\Domain\Contas;

class ContasController{
    public function inserir($params){
        require_once("../src/Views/contas/inserir_contas.html");
    }

    public function novo($params){
        $contas = new Contas($_POST['categoria'],['descricao']);
        $contasDAO = new ContasDAO();
        if ($contasDAO->inserir($contas)){
            return "Inserido com sucesso!";
        }   else    {
            return "Erro ao inserir!";
        }
    }
}