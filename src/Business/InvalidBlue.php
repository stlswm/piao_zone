<?php

namespace stlswm\PiaoZone\Business;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use stlswm\JsonObject\Json;
use stlswm\PiaoZone\Client;
use stlswm\PiaoZone\Request\InvalidBlueReq;
use stlswm\PiaoZone\Request\InvalidBlueRes;

/**
 * Class InvalidBlue
 *
 * @package stlswm\PiaoZone\Business
 */
class InvalidBlue
{
    /**
     * 作废蓝票
     *
     * @param Client         $client
     * @param InvalidBlueReq $invalidBlueReq
     *
     * @return InvalidBlueRes
     * @throws GuzzleException
     * @throws Exception
     */
    public static function req(
        Client $client,
        InvalidBlueReq $invalidBlueReq
    ): InvalidBlueRes {
        $token = $client->getToken();
        $invalidBlueRes = new InvalidBlueRes();
        $response = $client->request("/m5/bill/invoice/invalid?access_token={$token}", $invalidBlueReq, TRUE);
        $bool = Json::unMarshal($response, $invalidBlueRes);
        if (!$bool) {
            throw new Exception('无法解析返回：' . $response);
        }
        return $invalidBlueRes;
    }
}