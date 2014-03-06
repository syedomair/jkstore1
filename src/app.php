<?php

//Register services provider.
$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => $app['twig.path'],
    'twig.options' => array(
        'cache' => $app['twig.options.cache'],
        'strict_variables' => true,
   	'debug' => true,
   	'autoescape' => true
   ),
));

// Register repositories.
$app['repository.category'] = $app->share(function ($app) {
    return new JKStore\Repository\CategoryCollection($app['db']);
});
$app['repository.product'] = $app->share(function ($app) {
    return new JKStore\Repository\ProductCollection($app['db']);
});

return $app;
