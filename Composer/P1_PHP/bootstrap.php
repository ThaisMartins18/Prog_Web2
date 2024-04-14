<?php

require __DIR__."/vendor/autoload.php";

$metodo = $_SERVER['REQUEST_METHOD'];
$caminho = $_SERVER['PATH_INFO'] ?? '/';

#use Gatos\Router
$r = new Gatos\Router($metodo, $caminho);

#ROTAS

$r->get('/olamundo', 
    'Gatos\Controllers\HomeController@olaMundo');

$r->get('/olapessoa/{nome}', function($params){ 
    return 'Olá'.$params[1]; 
} );

$r->get('/exer1/formulario', 
    'Gatos\Controllers\HomeController@formExer1');

$r->post('/exer1/resposta', function(){
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $soma = $valor1 + $valor2;
    return "A soma é: {$soma}";
});

$r->get('/exer4/formulario', function(){
    require_once('exer4.html');
});

$r->post('/exer4/resposta', function(){
    $valor = $_POST['valor1'];
    $resposta = "";
    for ($i=1; $i<=10; $i++){
        $resultado = $valor * $i;
        $resposta .= "$valor x $i = $resultado<br/>";
    }
    return $resposta;
});

//Chamando o formulário para inserir categoria
$r->get('/categoria/inserir', 'Gatos\Controllers\CategoriaController@inserir');

$r->post('/categoria/novo', 'Gatos\Controllers\CategoriaController@novo');

#ROTAS

$resultado = $r->handler();

if(!$resultado){
    http_response_code(404);
    echo "Página não encontrada!";
    die();
}

if ($resultado instanceof Closure){
    echo $resultado($r->getParams());
} elseif (is_string($resultado)){
    $resultado = explode("@", $resultado);
    $controller = new $resultado[0];
    $resultado = $resultado[1];
    echo $controller->$resultado($r->getParams());
}



