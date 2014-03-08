<?php

namespace JKStore\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class ProductListController {

    public function productListAction(Request $request, Application $app) {

	$rbCat = \R::getAll( 'select * from Category' );
    	
	$rbProdList = \R::getAll( 'select * from Product where category_id = :catId', 
	        array(':catId'=>$request->attributes->get('catId')) 
    	);

        $data = array(
            'groupProductList'=> $rbProdList,
            'groupCategories' => $rbCat 
	);
        return $app['twig']->render('prodlist.html.twig', $data);
    }
}
