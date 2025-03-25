<?php
require_once '../config/database.php';
require_once '../core/Router.php';

$router = new Router();

// Définition des routes
$router->add('/', 'HomeController@index');
$router->add('/questions', 'QuestionController@index');
$router->add('/questions/create', 'QuestionController@create');
$router->add('questions/{id}', 'QuestionController@show');
$router->add('/auth/register', 'UserController@register');
$router->add('/auth/login', 'UserController@login');

$router->dispatch($_SERVER['REQUEST_URI']);
?>
