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
            $sql = "INSERT INTO livros (titulo,autor) VALUES (:titulo,:autor)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":titulo", $livros->getTitulo());
            $p->bindValue(":autor", $livros->getAutor());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }
}