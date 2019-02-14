<?php

$router->add('GET','/', function () use ($container) {
    $pdo = $container['db'];
    var_dump($pdo);
    return 'estamos na Home';
});

$router->add('GET','/projects/(\d+)', function ($params) {
    return 'Estamos listando o projeto de id:' .$params[1];
});