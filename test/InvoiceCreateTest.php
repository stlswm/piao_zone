<?php

use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Framework\TestCase;
use stlswm\PiaoZone\Business\InvoiceCreate;
use stlswm\PiaoZone\Client;
use stlswm\PiaoZone\Request\InvoiceCreateReq;

require 'Composer.php';

/**
 * Class InvoiceCreateReq
 */
class InvoiceCreateTest extends TestCase
{
    /**
     * @throws GuzzleException
     */
    public function testReq()
    {
        $client = Client::newClient('47jJn7w4Kc6oHl', 'UmuZA9Rf7366KQDa84a72cg3x8r9c7', '7h6BNaX0I7mZkAWG');
        $client->asTest();
        $req = new InvoiceCreateReq();
        var_dump(InvoiceCreate::req($client, '4968422f42fb6554943c2f7195c1eea4', $req));
    }
}