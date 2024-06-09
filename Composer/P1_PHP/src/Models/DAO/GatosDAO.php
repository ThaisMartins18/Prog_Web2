<?php

namespace Gatos\Models\DAO;

use Gatos\Models\Domain\Gatos;

class GatosDAO{

    private Conexao $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }

    public function inserir(Gatos $gatos){
        try{
            $sql = "INSERT INTO gatos (cor_pelagem, cor_olhos) VALUES (:cor_pelagem, :cor_olhos)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":cor_pelagem", $gatos->getCorPelagem());
            $p->bindValue(":cor_olhos", $gatos->getCorOlhos());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }            
    }

    public function alterar(Gatos $gatos){
        try{
            $sql = "UPDATE gatos SET cor_pelagem = :cor_pelagem, cor_olhos = :cor_olhos 
                    WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":cor_pelagem", $gatos->getCorPelagem());
            $p->bindValue(":cor_olhos", $gatos->getCorOlhos());
            $p->bindValue(":id", $gatos->getId());
            return $p->execute();
        }catch(\Exception $e){
            return 0;
        }
    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM gatos WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

    public function consultarTodos(){
        try{
            $sql = "SELECT * FROM gatos";
            return $this->conexao->getConexao()->query($sql);
        } catch(\Exception $e){
            return 0;
        }
    }

    public function consultar($id){
        try{
            $sql = "SELECT * FROM gatos WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch();
        } catch(\Exception $e){
            return 0;
        }
    }

}