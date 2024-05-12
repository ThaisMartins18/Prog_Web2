<?php

namespace Gatos\Models\DAO;

use Gatos\Models\Domain\Contas;

class ContasDAO{

    private Conexao $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }
    public function inserir(Contas $contas){
        try{
            $sql = "INSERT INTO contas (categoria, descricao) VALUES (:categoria, :descricao)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":categoria", $contas->getCategoria());
            $p->bindValue(":descricao", $contas->getDescricao());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }        
    }

    public function alterar(Contas $contas){
        try{
            $sql = "UPDATE contas SET categoria, descricao = :categoria, :descricao 
                    WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":categoria", $contas->getCategoria());
            $p->bindValue(":descricao", $contas->getDescricao());
//            $p->bindValue(":id", $contas->getId());
            return $p->execute();
        }catch(\Exception $e){
            return 0;
        }
    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM contas WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

    public function consultarTodos(){
        try{
            $sql = "SELECT * FROM contas";
            return $this->conexao->getConexao()->query($sql);
        } catch(\Exception $e){
            return 0;
        }
    }

    public function consultar($id){
        try{
            $sql = "SELECT * FROM contas WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch();
        } catch(\Exception $e){
            return 0;
        }
    }
}