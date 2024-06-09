<?php

namespace Gatos\Controllers;

use Gatos\Models\DAO\PizzasDAO;
use Gatos\Models\Domain\Pizzas;

class PizzasController{
    public function index($params){
        $pizzasDAO = new PizzasDAO();
        $resultado = $pizzasDAO->consultarTodos();
        $acao = $params[1] ?? "";
        $status = $params[2] ?? "";
        if($acao == "inserir" && $status == "true")
            $mensagem = "Registro inserido com sucesso!";
        elseif($acao == "inserir" && $status == "false")
            $mensagem = "Erro ao inserir!";

        elseif($acao == "alterar" && $status == "true")
            $mensagem = "Registro alterado com sucesso!";
        elseif($acao == "alterar" && $status == "false")
            $mensagem = "Erro ao alterar!";
        
        elseif($acao == "excluir" && $status == "true")
            $mensagem = "Registro excluído com sucesso!";
        elseif($acao == "excluir" && $status == "false")
            $mensagem = "Erro ao excluir!";
        else 
            $mensagem = "";
        require_once("../src/Views/pizzas/pizzas.php");
    }

    public function inserir($params){
        require_once("../src/Views/pizzas/inserir_pizzas.html");
    }

    public function novo($params){
        $pizzas = new Pizzas($_POST['sabor'],$_POST['peso']);
        $pizzasDAO = new PizzasDAO();
        if ($pizzasDAO->inserir($pizzas)){
            return "Inserido com sucesso!";
        }   else    {
            return "Erro ao inserir!";
        }
    }

    public function alterar($params){
        $pizzasDAO = new PizzasDAO();
        $resultado = $pizzasDAO->consultar($params[1]);
        require_once("../src/Views/pizzas/alterar_pizzas.php");
    }

    public function excluir($params){
        $pizzasDAO = new PizzasDAO();
        $resultado = $pizzasDAO->consultar($params[1]);
        require_once("../src/Views/pizzas/excluir_pizzas.php");
    }

    public function editar($params){
        $pizzas = new Pizzas($_POST['sabor'], $_POST['peso']);
        $pizzasDAO = new PizzasDAO();
        if ($pizzasDAO->alterar($pizzas)) {
            header("location: /pizzas/alterar/true");
        } else {
            header("location: /pizzas/alterar/false");
        }
    }
    public function deletar($params){
        $pizzasDAO = new PizzasDAO();
        if ($pizzasDAO->excluir($_POST['id'])){
            header("location: /pizzas/excluir/true");
        } else {
            header("location: /pizzas/excluir/false");
        }
    }
}