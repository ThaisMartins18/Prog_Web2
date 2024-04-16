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
}