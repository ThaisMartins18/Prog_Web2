<?php

namespace Gatos\Controllers;
namespace Contas\Controllers;
namespace Livros\Controllers;
namespace Pizzas\Controllers;

class HomeController{

    public function olaMundo($params){
        return "Olá Mundo!";
    }

    public function InsertGatos($params){
        require_once("../src/views/gatos/inserir_gatos.html");
    }
    public function InsertContas($params){
        require_once("../src/views/contas/inserir_contas.html");
    }
    public function InsertLivros($params){
        require_once("../src/views/livros/inserir_livros.html");
    }
    public function InsertPizzas($params){
        require_once("../src/views/pizzas/inserir_pizzas.html");
    }

}