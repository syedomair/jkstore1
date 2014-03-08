<?php

namespace JKStore\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class ProductDisplayController {

    public function productDisplayAction(Request $request, Application $app) {
       	
	$rbCat = \R::getAll( 'select * from Category' );
    	
	$rbProduct = \R::getRow( 'select * from Product where product_id = :prodId', 
	        array(':prodId'=>$request->attributes->get('prodId')) 
    	);

        $data = array(
            'aProduct'=> $rbProduct,
            'groupCategories' => $rbCat 
	);
        return $app['twig']->render('product.html.twig', $data);
    }
}
