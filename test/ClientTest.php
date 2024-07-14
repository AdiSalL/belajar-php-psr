<?php

namespace Pc\BelajarPhpPsr;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Utils;
use GuzzleHttp\Client;

use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase{
    public function testClient() {
        $url = "https://eo1ycff6ik9d41v.m.pipedream.net";

        $stream = Utils::streamFor(json_encode([
            "username" => "admin",
            "password" => "admin"
        ]));

        $request = new Request(
            method: "POST",
            uri: $url,
            headers: [
                "Content-Type" => "application/json",
            ],
            body: $stream
        );

        $client = new Client();
        $response = $client->sendRequest($request);
        
        self::assertNotNull($response);
        self::assertEquals(200, $response->getStatusCode());

    }

}