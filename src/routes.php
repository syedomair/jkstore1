<?php

// Register Routes.
$app->get('/', 'JKStore\Controller\HomeController::homeAction')
    ->bind('homepage');

$app->match('/prodList/{catId}', 'JKStore\Controller\ProductListController::productListAction')
    ->bind('prodList');

$app->match('/prod/{prodId}', 'JKStore\Controller\ProductDisplayController::productDisplayAction')
    ->bind('prod');

