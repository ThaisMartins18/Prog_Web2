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
            $sql = "INSERT INTO gatos (cor_pelagem) VALUES (:cor_pelagem)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":cor_pelagem", $gatos->getCorPelagem());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }       
        try{
            $sql = "INSERT INTO gatos (cor_olhos) VALUES (:cor_olhos)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":cor_olhos", $gatos->getCorOlhos());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }       
    }
}