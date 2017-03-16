<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NasaApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFHAC()
    {

        $response = $this->json('GET', '/api/fhac/1');
        $response->seeJsonArray('photos');
    }
}
