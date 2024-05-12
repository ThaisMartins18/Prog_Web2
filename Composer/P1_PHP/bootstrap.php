<?php

require __DIR__."/vendor/autoload.php";

$metodo = $_SERVER['REQUEST_METHOD'];
$caminho = $_SERVER['PATH_INFO'] ?? '/';

use Gatos\Router as Rout;
// use Contas\Router as ContasRouter;
// use Livros\Router as LivrosRouter;
// use Pizzas\Router as PizzasRouter;

$router = new Rout($metodo, $caminho);
// $router = new ContasRouter($metodo, $caminho);
// $router = new LivrosRouter($metodo, $caminho);
// $router = new PizzasRouter($metodo, $caminho);

#ROTAS

$router->get('/inserir_gatos', 
    'Gatos\Controllers\HomeController@formExer1');

$router->post('/inserir_gatos/resposta', function(){
    $cor_pelagem = $_POST['cor_pelagem'] ?? null;
    $cor_olhos = $_POST['cor_olhos'] ?? null;
} );

$router->get('/inserir_contas', 
    'Contas\Controllers\HomeController@formExer1');

$router->post('/inserir_contas/resposta', function(){
    $categoria = $_POST['categoria'] ?? null;
    $descricao = $_POST['descricao'] ?? null;
});

$router->get('/inserir_livros', 
    'Livros\Controllers\HomeController@formExer1');

$router->post('/inserir_livros/resposta', function(){
    $titulo = $_POST['titulo'] ?? null;
    $autor = $_POST['autor'] ?? null;
});

$router->get('/inserir_pizzas', 
    'Pizzas\Controllers\HomeController@formExer1');

$router->post('/inserir_pizzas/resposta', function(){
    $sabor = $_POST['sabor'] ?? null;
    $peso = $_POST['peso'] ?? null;
});


//Chamando o formulário para inserir categoria
$router->get('/gatos/inserir', 'Gatos\Controllers\GatosController@inserir');

$router->post('/gatos/novo', 'Gatos\Controllers\GatosController@novo');

$router->get('/gatos', 'Gatos\Controllers\GatosController@index');

$router->get('/gatos/{acao}/{status}', 'Gatos\Controllers\GatosController@index');

$router->get('/gatos/alterar/id/{id}', 'Gatos\Controllers\GatosController@alterar');

$router->get('/gatos/excluir/id/{id}', 'Gatos\Controllers\GatosController@excluir');

$router->post('/gatos/editar', 'Gatos\Controllers\GatosController@editar');

$router->post('/gatos/deletar', 'Gatos\Controllers\GatosController@deletar');




$router->get('/contas/inserir', 'Gatos\Controllers\ContasController@inserir');

$router->post('/contas/novo', 'Gatos\Controllers\ContasController@novo');

$router->get('/contas', 'Gatos\Controllers\ContasController@index');

$router->get('/contas/{acao}/{status}', 'Gatos\Controllers\ContasController@index');

$router->get('/contas/alterar/id/{id}', 'Gatos\Controllers\ContasController@alterar');

$router->get('/contas/excluir/id/{id}', 'Gatos\Controllers\ContasController@excluir');

$router->post('/contas/editar', 'Gatos\Controllers\ContasController@editar');

$router->post('/contas/deletar', 'Gatos\Controllers\ContasController@deletar');



$router->get('/livros/inserir', 'Gatos\Controllers\LivrosController@inserir');

$router->post('/livros/novo', 'Gatos\Controllers\LivrosController@novo');

$router->get('/livros', 'Gatos\Controllers\LivrosController@index');

$router->get('/livros/{acao}/{status}', 'Gatos\Controllers\LivrosController@index');

$router->get('/livros/alterar/id/{id}', 'Gatos\Controllers\LivrosController@alterar');

$router->get('/livros/excluir/id/{id}', 'Gatos\Controllers\LivrosController@excluir');

$router->post('/livros/editar', 'Gatos\Controllers\LivrosController@editar');

$router->post('/livros/deletar', 'Gatos\Controllers\LivrosController@deletar');



$router->get('/pizzas/inserir', 'Gatos\Controllers\PizzasController@inserir');

$router->post('/pizzas/novo', 'Gatos\Controllers\PizzasController@novo');

$router->get('/pizzas', 'Gatos\Controllers\PizzasController@index');

$router->get('/pizzas/{acao}/{status}', 'Gatos\Controllers\PizzasController@index');

$router->get('/pizzas/alterar/id/{id}', 'Gatos\Controllers\PizzasController@alterar');

$router->get('/pizzas/excluir/id/{id}', 'Gatos\Controllers\PizzasController@excluir');

$router->post('/pizzas/editar', 'Gatos\Controllers\PizzasController@editar');

$router->post('/pizzas/deletar', 'Gatos\Controllers\PizzasController@deletar');

// $routerUsado = null;
// if ($router->matchRoute()) {
//     $routerUsado = $router;
// } elseif ($router->matchRoute()) {
//     $routerUsado = $router;
// } elseif ($router->matchRoute()) {
//     $routerUsado = $router;
// } elseif ($router->matchRoute()) {
//     $routerUsado = $router;
// } 

// Se nenhum roteador corresponder ao caminho, retornar 404
// if (!$routerUsado) {
//     http_response_code(404);
//     echo "Página não encontrada!";
//     die();
// }


// Manipulando a solicitação usando o roteador correto
$resultado = $router->handler();

// Tratando o resultado
if ($resultado instanceof Closure) {
    echo $resultado($router->getParams());
} elseif (is_string($resultado)) {
    $resultado = explode("@", $resultado);
    $controller = new $resultado[0];
    $resultado = $resultado[1];
    echo $controller->$resultado($router->getParams());
}

#ROTAS

/*$resultado = $router->handler() ?? $router->handler();

if(!$resultado){
    http_response_code(404);
    echo "Página não encontrada!";
    die();
}

if ($resultado instanceof Closure){
    echo $resultado($router->getParams() ?? $router->getParams());
} elseif (is_string($resultado)){
    $resultado = explode("@", $resultado);
    $controller = new $resultado[0];
    $resultado = $resultado[1];
    echo $controller->$resultado($router->getParams() ?? $router->getParams());
}
*/