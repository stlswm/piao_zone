<?php

use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Framework\TestCase;
use stlswm\PiaoZone\Business\InvoiceQuery;
use stlswm\PiaoZone\Client;
use stlswm\PiaoZone\Request\InvoiceQueryReq;

require "../vendor/autoload.php";

/**
 * Class InvoiceQueryTest
 */
class InvoiceQueryTest extends TestCase
{
    /**
     * @throws GuzzleException
     */
    public function testReq()
    {
        $client = Client::newClient('', '', '');
        $client->asTest();
        $client->setToken('');
        $req = new InvoiceQueryReq();
        $req->serialNo = '';
        var_dump(InvoiceQuery::req($client, $req));
    }
}