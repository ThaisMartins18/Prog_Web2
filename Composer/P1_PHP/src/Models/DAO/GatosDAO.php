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
}