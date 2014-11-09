<?php

namespace My\TelemedicineBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');
        $form = $crawler->selectButton('login')->form();

        // set some values
        $form['_username'] = 'curso';
        $form['_password'] = 'curso';

        // submit the form
        $crawler = $client->submit($form);
        $crawler = $client->followRedirect();

        $this->assertTrue($crawler->filter('html:contains("Welcome!")')->count() > 0);
        

    }
}
