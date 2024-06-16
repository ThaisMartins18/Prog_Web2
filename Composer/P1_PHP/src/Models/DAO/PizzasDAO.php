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
            $sql = "INSERT INTO pizzas (sabor, peso) VALUES (:sabor, :peso)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":sabor", $pizzas->getSabor());
            $p->bindValue(":peso", $pizzas->getPeso());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }            
    }

    public function alterar(Pizzas $pizzas){
        try{
            $sql = "UPDATE pizzas SET sabor = :sabor, peso = :peso 
                    WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":sabor", $pizzas->getSabor());
            $p->bindValue(":peso", $pizzas->getPeso());
            $p->bindValue(":id", $pizzas->getId());
            return $p->execute();
        }catch(\Exception $e){
            return 0;
        }
    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM pizzas WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

    public function consultarTodos(){
        try{
            $sql = "SELECT * FROM pizzas";
            return $this->conexao->getConexao()->query($sql);
            
        } catch(\Exception $e){
            return 0;
        }
    }

    public function consultar($id){
        try{
            $sql = "SELECT * FROM pizzas WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch();
        } catch(\Exception $e){
            return 0;
        }
    }

}