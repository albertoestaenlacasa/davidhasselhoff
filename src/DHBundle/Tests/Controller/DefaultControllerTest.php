<?php

namespace DHBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{

    public function testIndex(){
        //entramos en la home 
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $this->assertEquals(200,$client->getResponse()->getStatusCode());

        $this->assertTrue($crawler->filter('html:contains("David Hasselhoff")')->count() == 1);

    }

    public function testChangeLang()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/idioma/en');

        $idiomaReques = $client->getRequest()->getLocale();
        $idiomaSession = $client->getContainer()->get('session')->get('_locale');

        //comprobamos que se ha cambiado el idioma en la sesión y request del usuario
		$this->assertEquals(
		    'en',
		    $idiomaReques
		);

        $this->assertEquals(
            'en',
            $idiomaSession
        );

        //$this->assertContains('Hello World', $client->getResponse()->getContent());
    }

    public function testNews()
    {
        $client = static::createClient();
        
        //entramos en la página de noticias
        $crawler = $client->request('GET', '/noticias');
        $this->assertEquals(200,$client->getResponse()->getStatusCode());    

        $this->assertTrue($crawler->filter('html:contains("Contact")')->count() == 1);

    }

}
