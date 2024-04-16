<?php

namespace Gatos\Models\DAO;

use Gatos\Models\Domain\Pizzas;

class PizzasDAO{

    private Conexao $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }
    public function inserir(Pizzas $pizzas){
        try{
            $sql = "INSERT INTO pizzas (sabor) VALUES (:sabor)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":sabor", $pizzas->getSabor());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }       
        try{
            $sql = "INSERT INTO pizzas (peso) VALUES (:peso)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":peso", $pizzas->getPeso());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }    
    }
}