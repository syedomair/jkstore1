<?php

// Set Timezone.
date_default_timezone_set('Asia/Karachi');

//Cache Files
$app['cache.path'] = __DIR__ .'/cache';

//Twig cache files
$app['twig.path'] = __DIR__.'/views'; 
$app['twig.options.cache'] = $app['cache.path'] ;

//Redbean mysql configuration
R::setup('mysql:host=localhost;dbname=jkstore','','');

//enable the debug mode
$app['debug'] = true;
