<?php

namespace JKStore\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class HomeController {

    public function homeAction(Request $request, Application $app) {

        $categoriesCollection = $app['repository.category']->findAll();
        $data = array(
            'groupCategories' => $categoriesCollection 
	);
        return $app['twig']->render('home.html.twig', $data);
    }
}
