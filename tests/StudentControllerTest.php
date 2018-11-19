<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StudentControllerTest extends WebTestCase
{
    public function testHelloWorld()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/student');

        $this->assertSame(200, $client->getResponse()->getStatusCode());
        $this->assertContains("Hello world !", $crawler->filter('h1')->text());
    }
}
