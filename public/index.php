<?php
require_once '../config/database.php';
require_once '../core/Router.php';

$router = new Router();

// Définition des routes
$router->add('', 'HomeController@index');
$router->add('/questions', 'QuestionController@index');
$router->add('/questions/create', 'QuestionController@create');
$router->add('/questions/{id}', 'QuestionController@show');  // Note the leading slash
$router->add('/auth/register', 'AuthController@register');
$router->add('/auth/login', 'AuthController@login');
$router->add('/auth/logout', 'AuthController@logout');
$router->add('/answers/create', 'AnswerController@create');
$router->add('/docs','HomeController@docs');
$router->add('/docs/flutter','HomeController@flutter');
$router->add('/docs/react-native','HomeController@reactNative');
$router->dispatch($_SERVER['REQUEST_URI']);
?>
