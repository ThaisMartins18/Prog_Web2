<?php

namespace Contas\Models\DAO;

use Contas\Models\Domain\Contas;

class ContasDAO{

    private Conexao $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }
    public function inserir(Contas $contas){
        try{
            $sql = "INSERT INTO contas (categoria) VALUES (:categoria)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":categoria", $contas->getCategoria());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }       
        try{
            $sql = "INSERT INTO contas (descricao) VALUES (:descricao)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":descricao", $contas->getDescricao());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }    
    }
}