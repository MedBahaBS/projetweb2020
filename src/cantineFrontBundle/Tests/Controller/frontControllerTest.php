<?php

namespace cantineFrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class frontControllerTest extends WebTestCase
{
    public function testAffichermenu()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/afficherMenu');
    }

}
