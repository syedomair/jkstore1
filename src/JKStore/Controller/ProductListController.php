<?php

namespace JKStore\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class ProductListController {

    public function productListAction(Request $request, Application $app) {

        $categoriesCollection = $app['repository.category']->findAll();
        $productListCollection = $app['repository.product']->findCat($request->attributes->get('catId'));

        $data = array(
            'groupProductList'=> $productListCollection,
            'groupCategories' => $categoriesCollection 
	);
        return $app['twig']->render('prodlist.html.twig', $data);
    }
}
