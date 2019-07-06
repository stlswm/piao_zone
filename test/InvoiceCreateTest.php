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
        $client = Client::newClient('', '', '');
        $client->asTest();
        $req = new InvoiceCreateReq();
        var_dump(InvoiceCreate::req($client, $req));
    }
}