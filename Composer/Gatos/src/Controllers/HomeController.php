<?php

namespace Php\Gatos\Controllers;

class HomeController{

    public function olaMundo($params){
        return "Olá Mundo!";
    }

    public function formExer1($params){
        require_once("../src/views/exer1.html");
    }

}