<?php

namespace stlswm\PiaoZone\Business;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use stlswm\JsonObject\Json;
use stlswm\PiaoZone\Client;
use stlswm\PiaoZone\Response\InvoiceCreateRes;
use stlswm\PiaoZone\Request\InvoiceCreateReq;

/**
 * Class InvoiceCreate
 * @package stlswm\PiaoZone\Business
 */
class InvoiceCreate
{
    /**
     * @param  Client  $client
     * @param  InvoiceCreateReq  $invoiceCreateReq
     * @return InvoiceCreateRes
     * @throws GuzzleException
     * @throws Exception
     */
    public static function req(
        Client $client,
        InvoiceCreateReq $invoiceCreateReq
    ): InvoiceCreateRes {
        $token = $client->getToken();
        $createRes = new InvoiceCreateRes();
        $response = $client->request("/m5/bill/invoice/create?access_token={$token}", $invoiceCreateReq, true);
        $bool = Json::unMarshal($response, $createRes);
        if (!$bool) {
            throw new Exception('无法解析返回：'.$response);
        }
        return $createRes;
    }
}