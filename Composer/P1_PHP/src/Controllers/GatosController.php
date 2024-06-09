<?php

namespace Gatos\Controllers;

use Gatos\Models\DAO\GatosDAO;
use Gatos\Models\Domain\Gatos;

class GatosController{
    public function index($params){
        $gatosDAO = new GatosDAO();
        $resultado = $gatosDAO->consultarTodos();
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
        require_once("../src/Views/gatos/gatos.php");
    }

    public function inserir($params){
        require_once("../src/Views/gatos/inserir_gatos.html");
    }

    public function novo($params){
        $gatos = new Gatos($_POST['cor_pelagem'],$_POST['cor_olhos']);
        $gatosDAO = new GatosDAO();
        if ($gatosDAO->inserir($gatos)){
            return "Inserido com sucesso!";
        }   else    {
            return "Erro ao inserir!";
        }
    }

    public function alterar($params){
        $gatosDAO = new GatosDAO();
        $resultado = $gatosDAO->consultar($params[1]);
        require_once("../src/Views/gatos/alterar_gatos.php");
    }

    public function excluir($params){
        $gatosDAO = new GatosDAO();
        $resultado = $gatosDAO->consultar($params[1]);
        require_once("../src/Views/gatos/excluir_gatos.php");
    }

    public function editar($params){
        $gatos = new Gatos($_POST['id'], $_POST['cor_pelagem'], $_POST['cor_olhos']);
        $gatosDAO = new GatosDAO();
        if ($gatosDAO->alterar($gatos)) {
            header("location: /gatos/alterar/true");
        } else {
            header("location: /gatos/alterar/false");
        }
    }

    public function deletar($params){
        $gatosDAO = new GatosDAO();
        if ($gatosDAO->excluir($_POST['id'])){
            header("location: /gatos/excluir/true");
        } else {
            header("location: /gatos/excluir/false");
        }
    }
}