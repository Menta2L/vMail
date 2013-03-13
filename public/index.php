<?php

$loader = new \Phalcon\Loader();
$loader->registerDirs(
       array(
            __DIR__ . '/../library/',
            __DIR__ . '/../library/FirePHPCore/',
            __DIR__ . '/../vendor/',
               __DIR__ . '/../app/models/',
        )
);
$loader->registerNamespaces(
    array(
        "Vi"    => __DIR__ . '/../library/Vi/',
        )
);
$loader->register();
ob_start();
//$config = new Phalcon\Config\Adapter\Ini(__DIR__.'/../app/config/config.ini');
$config = include(__DIR__."/../app/config/config.php");
$app= Vi\Mvc\Application::getInstance($config);
$app->setup();
$app->main();
