<?php

namespace P1_PHP\Models\DAO;

use P1_PHP\Models\Domain\Gatos;

class GatosDAO{

    private Conexao $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }

    public function inserir(Gatos $gatos){
        try{
            $sql = "INSERT INTO gatos (cor_pelagem) VALUES (:cor_pelagem)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":cor_pelagem", $gatos->getCorPelagem());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }       
    }
}