<?php

//Register services provider.
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

return $app;
