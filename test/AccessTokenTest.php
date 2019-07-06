<?php

use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Framework\TestCase;
use stlswm\PiaoZone\Business\AccessToken;
use stlswm\PiaoZone\Client;
use stlswm\PiaoZone\Request\AccessTokenReq;

require 'Composer.php';

/**
 * Class AccessTokenTest
 */
class AccessTokenTest extends TestCase
{
    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public function testReq()
    {
        $client = Client::newClient('47jJn7w4Kc6oHl', 'UmuZA9Rf7366KQDa84a72cg3x8r9c7', '7h6BNaX0I7mZkAWG');
        $client->asTest();
        $req = new AccessTokenReq();
        $req->client_id = $client->clientId;
        var_dump(AccessToken::req($client));
    }
}