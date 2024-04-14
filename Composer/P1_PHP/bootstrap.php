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

$r->get('/inserir_gatos', 
    'Gatos\Controllers\HomeController@formExer1');

$r->post('/inserir_gatos/resposta', function(){
    $cor_pelagem = $_POST['cor_pelagem'];
    $cor_olhos = $_POST['cor_olhos'];
});

/*$r->get('/exer4/formulario', function(){
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
});*/

//Chamando o formulário para inserir categoria
$r->get('/gatos/inserir', 'Gatos\Controllers\GatosController@inserir');

$r->post('/gatos/novo', 'Gatos\Controllers\GatosController@novo');

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
