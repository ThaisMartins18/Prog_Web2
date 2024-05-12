<?php

namespace Contas\Controllers;

use Contas\Models\DAO\ContasDAO;
use Contas\Models\Domain\Contas;

class ContasController{
    public function index($params){
        $contasDAO = new ContasDAO();
        $resultado = $contasDAO->consultarTodos();
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
        require_once("../src/Views/contas/contas.php");
    }

    public function inserir($params){
        require_once("../src/Views/contas/inserir_contas.html");
    }

    public function novo($params){
        $contas = new Contas($_POST['categoria'],$_POST['descricao']);
        $contasDAO = new ContasDAO();
        if ($contasDAO->inserir($contas)){
            return "Inserido com sucesso!";
        }   else    {
            return "Erro ao inserir!";
        }
    }

    public function alterar($params){
        $contasDAO = new ContasDAO();
        $resultado = $contasDAO->consultar($params[1]);
        require_once("../src/Views/contas/alterar_contas.php");
    }

    public function excluir($params){
        $contasDAO = new ContasDAO();
        $resultado = $contasDAO->consultar($params[1]);
        require_once("../src/Views/contas/excluir_contas.php");
    }

    public function editar($params){
        $contas = new Contas($_POST['id'], $_POST['categoria'], $_POST['descricao']);
        $contasDAO = new ContasDAO();
        if ($contasDAO->alterar($contas)) {
            header("location: /contas/alterar/true");
        } else {
            header("location: /contas/alterar/false");
        }
    }

    public function deletar($params){
        $contasDAO = new ContasDAO();
        if ($contasDAO->excluir($_POST['id'])){
            header("location: /contas/excluir/true");
        } else {
            header("location: /contas/excluir/false");
        }
    }
}