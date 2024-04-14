<?php

namespace Gatos\Controllers;

class HomeController{

    public function olaMundo($params){
        return "Olá Mundo!";
    }

    public function InsertGatos($params){
        require_once("../src/views/gatos/inserir_gatos.html");
    }

}