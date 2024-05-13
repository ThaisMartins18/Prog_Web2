<?php

namespace Gatos\Models\DAO;

use Gatos\Models\Domain\Livros;

class LivrosDAO{

    private Conexao $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }
    public function inserir(Livros $livros){
        try{
            $sql = "INSERT INTO livros (titulo,autor) VALUES (:titulo,:autor)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":titulo", $livros->getTitulo());
            $p->bindValue(":autor", $livros->getAutor());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

    public function alterar(Livros $livros){
        try{
            $sql = "UPDATE livros SET titulo, autor = :titulo, :autor 
                    WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":titulo", $livros->getTitulo());
            $p->bindValue(":autor", $livros->getAutor());
//            $p->bindValue(":id", $gatos->getId());
            return $p->execute();
        }catch(\Exception $e){
            return 0;
        }
    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM livros WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

    public function consultarTodos(){
        try{
            $sql = "SELECT * FROM livros";
            return $this->conexao->getConexao()->query($sql);
        } catch(\Exception $e){
            return 0;
        }
    }

    public function consultar($id){
        try{
            $sql = "SELECT * FROM livros WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch();
        } catch(\Exception $e){
            return 0;
        }
    }

}