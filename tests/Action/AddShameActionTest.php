<?php

namespace App\Tests\Action;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AddShameActionTest extends WebTestCase
{
    public function testSuccessfullySaved() {
        $client = static::createClient();

        $client->request("POST", "/shame", [
            "name" => "test", "status" => "Assembling"
        ]);

        $this->assertResponseIsSuccessful('{"name": "test", "status": "Assembling"}');
        $this->assertResponseStatusCodeSame(201);
    }
}
