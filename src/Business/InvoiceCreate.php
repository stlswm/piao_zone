<?php

namespace stlswm\PiaoZone\Business;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use stlswm\JsonObject\Json;
use stlswm\PiaoZone\Client;
use stlswm\PiaoZone\Response\InvoiceCreateRes;
use stlswm\PiaoZone\Request\InvoiceCreateReq;

class InvoiceCreate
{
    /**
     * @param Client           $client
     * @param string           $accessToken
     * @param InvoiceCreateReq $invoiceCreateReq
     *
     * @return InvoiceCreateRes
     * @throws GuzzleException
     * @throws Exception
     */
    public static function req(
        Client $client,
        string $accessToken,
        InvoiceCreateReq $invoiceCreateReq
    ): InvoiceCreateRes {
        $accessTokenRes = new InvoiceCreateRes();
        $response = $client->request("/m5/bill/invoice/create?access_token={$accessToken}", $invoiceCreateReq);
        $bool = Json::unMarshal($response, $accessTokenRes);
        if (!$bool) {
            throw new Exception('无法解析返回：' . $response);
        }
        return $accessTokenRes;
    }
}