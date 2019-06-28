<?php

use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Framework\TestCase;
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
        $client = Client::newClient('1', '2');
        $req = new InvoiceCreateReq();
        var_dump(\stlswm\PiaoZone\Business\InvoiceCreate::req($client, '111', $req));
    }
}