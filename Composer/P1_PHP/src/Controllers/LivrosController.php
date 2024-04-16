<?php

namespace Gatos\Controllers;

use Gatos\Models\DAO\LivrosDAO;
use Gatos\Models\Domain\Livros;

class LivrosController{
    public function inserir($params){
        require_once("../src/Views/livros/inserir_livros.html");
    }

    public function novo($params){
        $livros = new Livros($_POST['titulo'],['autor']);
        $livrosDAO = new LivrosDAO();
        if ($livrosDAO->inserir($livros)){
            return "Inserido com sucesso!";
        }   else    {
            return "Erro ao inserir!";
        }
    }
}