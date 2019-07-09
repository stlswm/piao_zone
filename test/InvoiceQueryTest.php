<?php

use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Framework\TestCase;
use stlswm\PiaoZone\Business\InvoiceQuery;
use stlswm\PiaoZone\Client;
use stlswm\PiaoZone\Request\InvoiceQueryReq;

require 'Composer.php';

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
        $client = Client::newClient('47jJn7w4Kc6oHl', 'UmuZA9Rf7366KQDa84a72cg3x8r9c7', '7h6BNaX0I7mZkAWG');
        $client->asTest();
        $client->setToken('119aaa3796f7fc9d852ad158d0610a66');
        $req = new InvoiceQueryReq();
        $req->serialNo = '20190708170135892499';
        var_dump(InvoiceQuery::req($client, $req));
    }
}