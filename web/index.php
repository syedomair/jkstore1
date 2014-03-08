<?php

define('JKSTORE', __DIR__);
require_once __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../vendor/redbean/rb.php';
$app = new Silex\Application();
require __DIR__.'/../app/config.php';
require __DIR__.'/../src/app.php';
require __DIR__.'/../src/routes.php';

// Return the kernel instead to run it, if we are unit testing
  if (isset($_SERVER['env']) && 'test' === $_SERVER['env']) {
    return $app;
  }

$app->run();
