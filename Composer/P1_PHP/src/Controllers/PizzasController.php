<?php

namespace Pizzas\Controllers;

use Pizzas\Models\DAO\PizzasDAO;
use Pizzas\Models\Domain\Pizzas;

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