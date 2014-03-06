<?php

// Set Timezone.
date_default_timezone_set('Asia/Karachi');

//Cache Files
$app['cache.path'] = __DIR__ .'/cache';

//Twig cache files
$app['twig.path'] = __DIR__.'/views'; 
$app['twig.options.cache'] = $app['cache.path'] ;

//Doctrine (mysql db link)
$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'host'     => '127.0.0.1',
    'port'     => '3306',
    'dbname'   => 'jkstore',
    'user'     => '',
    'password' => '',
);

//enable the debug mode
$app['debug'] = true;
