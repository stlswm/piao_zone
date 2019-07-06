<?php

namespace stlswm\PiaoZone\Business;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use stlswm\JsonObject\Json;
use stlswm\PiaoZone\Client;
use stlswm\PiaoZone\Request\AccessTokenReq;
use stlswm\PiaoZone\Response\AccessTokenRes;

/**
 * Class AccessToken
 *
 * @package stlswm\PiaoZone\AccessToken
 */
class AccessToken
{
    /**
     * @param Client         $client
     * @param AccessTokenReq $accessTokenReq
     *
     * @return AccessTokenRes
     * @throws GuzzleException
     * @throws Exception
     */
    public static function req(Client $client): AccessTokenRes
    {
        $timestamp = time();
        $accessTokenReq = new AccessTokenReq;
        $accessTokenReq->client_id = $client->clientId;
        $accessTokenReq->sign = md5($client->clientId . $client->secret . $timestamp);
        $accessTokenReq->timestamp = $timestamp;
        $response = $client->request('/base/oauth/token', $accessTokenReq);
        $accessTokenRes = new AccessTokenRes;
        $bool = Json::unMarshal($response, $accessTokenRes);
        if (!$bool) {
            throw new Exception('无法解析返回：' . $response);
        }
        return $accessTokenRes;
    }
}