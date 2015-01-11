<?php
    require 'Slim/Slim.php';'data.php';

    \Slim\Slim::registerAutoloader();

    $app = new \Slim\Slim();
    
    $app->get('/team/:name', function ($name) {
        $dataAccess = new data();

        $result = $dataAccess->getTeam($name);

        header("Content-Type: application/json");
        echo json_encode($result);
        exit;
    });
    
    $app->get('/player/:name', function ($name) {
        header("Content-Type: application/json");
        echo json_encode("Hello, $name");
        exit;
    });

    $app->run();


