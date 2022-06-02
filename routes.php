<?php 

// $router->define([
//     '' => 'controllers/index.php',
//     'create' => 'controllers/create.php',
// ]);

$router->get('groceries', 'controllers/index.php');
$router->get('groceries/create', 'controllers/create.php');
$router->post('groceries/create', 'controllers/create.php');