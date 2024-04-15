<?php

namespace Livros\Controllers;

use Livros\Models\DAO\LivrosDAO;
use Livros\Models\Domain\Livros;

class LivrosController{
    public function inserir($params){
        require_once("../src/Views/livros/inserir_livros.html");
    }

    public function novo($params){
        $livros = new Livros(0, $_POST['titulo'],['autor']);
        $livrosDAO = new LivrosDAO();
        if ($livrosDAO->inserir($livros)){
            return "Inserido com sucesso!";
        }   else    {
            return "Erro ao inserir!";
        }
    }
}