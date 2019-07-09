<?php

namespace stlswm\PiaoZone\Business;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use stlswm\JsonObject\Json;
use stlswm\PiaoZone\Client;
use stlswm\PiaoZone\Request\InvoiceQueryReq;
use stlswm\PiaoZone\Response\InvoiceQueryRes;

/**
 * Class InvoiceQuery
 *
 * @package stlswm\PiaoZone\Business
 */
class InvoiceQuery
{
    /**
     * @param Client          $client
     * @param InvoiceQueryReq $invoiceQueryReq
     *
     * @return InvoiceQueryRes
     * @throws GuzzleException
     * @throws Exception
     */
    public static function req(
        Client $client,
        InvoiceQueryReq $invoiceQueryReq
    ): InvoiceQueryRes {
        $token = $client->getToken();
        $invoiceQueryRes = new InvoiceQueryRes();
        $response = $client->request("/m7/bill/invoice/serialno/query?access_token={$token}", $invoiceQueryReq, TRUE);
        $bool = Json::unMarshal($response, $invoiceQueryRes);
        if (!$bool) {
            throw new Exception('无法解析返回：' . $response);
        }
        return $invoiceQueryRes;
    }
}