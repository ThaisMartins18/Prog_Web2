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
            $sql = "INSERT INTO livros (titulo) VALUES (:titulo)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":titulo", $livros->getTitulo());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
        try{
            $sql = "INSERT INTO livros (autor) VALUES (:autor)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":autor", $livros->getAutor());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }          
    }
}