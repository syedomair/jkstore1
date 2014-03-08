<?php

namespace JKStore\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class HomeController {

    public function homeAction(Request $request, Application $app) {

       	$rbCat = \R::getAll( 'select * from Category' );
 
        $data = array(
            'groupCategories' => $rbCat 
	);
        return $app['twig']->render('home.html.twig', $data);
    }
}
