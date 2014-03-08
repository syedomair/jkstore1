<?php

namespace JKStore\Test;

use Silex\WebTestCase;

class ControllerTest extends WebTestCase {


    public function createApplication() {
       $app = require __DIR__.'/../../../web/index.php';
       $app['debug'] = true;
       $app['exception_handler']->disable();

       return $app;
    }
/**/
    public function testHomePage() {
    	$client = $this->createClient();
	$crawler = $client->request('GET', '/');

        //Testing Home page	
	$this->assertTrue($client->getResponse()->isOk());
	//header
    	$this->assertCount(1, $crawler->filter('h1:contains("JK Store")'));
	//left side bar
    	$this->assertCount(1, $crawler->filter('b:contains("Store Categories")'));
	//content
    	$this->assertCount(1, $crawler->filter('h1:contains("JK Sample Store.")'));
	//footer
    	$this->assertCount(1, $crawler->filter('b:contains("JK Store is a sample store.")'));

	$link = $crawler->selectLink('Pants')->link();
	$crawler = $client->click($link);

	//Testing Product List Display Page
    	$this->assertTrue($client->getResponse()->isOk());
	//content
    	$this->assertCount(1, $crawler->filter('b:contains("Product List")'));

	//Testing Product Display Page
	$link = $crawler->selectLink('Men\'s corduroy pants - Black 29W x 28L')->link();
	$crawler = $client->click($link);

    	$this->assertTrue($client->getResponse()->isOk());
	//content
    	$this->assertCount(1, $crawler->filter('b:contains("Product Display")'));


	    
    }

}
