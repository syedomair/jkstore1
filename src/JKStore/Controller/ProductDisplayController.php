<?php

namespace JKStore\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class ProductDisplayController {

    public function productDisplayAction(Request $request, Application $app) {
        $categoriesCollection = $app['repository.category']->findAll();
        $product = $app['repository.product']->find($request->attributes->get('prodId'));

        $data = array(
            'aProduct'=> $product,
            'groupCategories' => $categoriesCollection 
	);
        return $app['twig']->render('product.html.twig', $data);
    }
}
