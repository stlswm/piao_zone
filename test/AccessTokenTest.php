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
        $client = Client::newClient('', '', '');
        $client->asTest();
        $req = new AccessTokenReq();
        $req->client_id = $client->clientId;
        var_dump(AccessToken::req($client));
    }
}