<?php

namespace Action;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ListShameActionTest extends WebTestCase
{
    public function testSuccessfullyList() {
        $client = static::createClient();

        $client->request("GET", "/list-shame");

        $this->assertResponseIsSuccessful('[{"name": "test", "status": "Assembling"}]');
        $this->assertResponseStatusCodeSame(200);
    }
}