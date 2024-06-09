<?php

namespace Gatos\Controllers;

use Gatos\Models\DAO\LivrosDAO;
use Gatos\Models\Domain\Livros;

class LivrosController{
    public function index($params){
        $livrosDAO = new LivrosDAO();
        $resultado = $livrosDAO->consultarTodos();
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
        require_once("../src/Views/livros/inserir_livros.html");
    }

    public function novo($params){
        $livros = new Livros($_POST['titulo'],$_POST['autor']);
        $livrosDAO = new LivrosDAO();
        if ($livrosDAO->inserir($livros)){
            return "Inserido com sucesso!";
        }   else    {
            return "Erro ao inserir!";
        }
    }

    public function alterar($params){
        $livrosDAO = new LivrosDAO();
        $resultado = $livrosDAO->consultar($params[1]);
        require_once("../src/Views/livros/alterar_livros.php");
    }

    public function excluir($params){
        $livrosDAO = new LivrosDAO();
        $resultado = $livrosDAO->consultar($params[1]);
        require_once("../src/Views/livros/excluir_livros.php");
    }

    public function editar($params){
<<<<<<< HEAD
        $livros = new Livros($_POST['titulo'], $_POST['autor']);
=======
        $livros = new Livros($_POST['id'], $_POST['titulo'], $_POST['autor']);
>>>>>>> b64bd0123caab28fde88f3847c3536aa42b69999
        $livrosDAO = new LivrosDAO();
        if ($livrosDAO->alterar($livros)) {
            header("location: /livros/alterar/true");
        } else {
            header("location: /livros/alterar/false");
        }
    }

    public function deletar($params){
        $livrosDAO = new LivrosDAO();
        if ($livrosDAO->excluir($_POST['id'])){
            header("location: /livros/excluir/true");
        } else {
            header("location: /livros/excluir/false");
        }
    }
}