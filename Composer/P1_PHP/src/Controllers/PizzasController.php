<?php

namespace Gatos\Controllers;

use Gatos\Models\DAO\PizzasDAO;
use Gatos\Models\Domain\Pizzas;

class PizzasController{
    public function inserir($params){
        require_once("../src/Views/pizzas/inserir_pizzas.html");
    }

    public function novo($params){
        $pizzas = new Pizzas(0, $_POST['sabor'],['peso']);
        $pizzasDAO = new PizzasDAO();
        if ($pizzasDAO->inserir($pizzas)){
            return "Inserido com sucesso!";
        }   else    {
            return "Erro ao inserir!";
        }
    }
}