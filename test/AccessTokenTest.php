<?php

use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Framework\TestCase;
use stlswm\PiaoZone\Business\AccessToken;
use stlswm\PiaoZone\Client;

require "../vendor/autoload.php";

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
        var_dump(AccessToken::req($client));
    }
}