<?php

namespace cantineBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class monControllerTest extends WebTestCase
{
    public function testAjouterplat()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ajouterplat');
    }

    public function testAfficherplat()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/afficherplat');
    }

    public function testAjoutermenu()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ajoutermenu');
    }

    public function testAffichermenu()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/affichermenu');
    }

}
