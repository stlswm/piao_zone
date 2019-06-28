<?php

namespace stlswm\PiaoZone;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use stlswm\PiaoZone\Request\Req;

/**
 * Class Client
 *
 * @package stlswm\PiaoZone
 */
class Client
{
    /**
     * @var string
     */
    private static $domain = 'https://api.piaozone.com';
    /**
     * @var string
     */
    private static $domainTest = 'https://api-dev.piaozone.com';
    /**
     * @var string 开发客户端id
     */
    public $clientId;
    /**
     * @var string 加密秘钥
     */
    public $secret;

    /**
     * @var bool
     */
    private $isTest = FALSE;


    /**
     * 设置为测试用客户端
     *
     * @return $this
     */
    public function asTest(): Client
    {
        $this->isTest = TRUE;
        return $this;
    }

    /**
     * @param string $router
     * @param Req    $req
     *
     * @return string
     * @throws GuzzleException
     * @throws Exception
     */
    public function request(string $router, Req $req): string
    {
        $api = self::$domain;
        if ($this->isTest) {
            $api = self::$domainTest;
        }
        if (strpos($router, '/') !== 0) {
            $router = '/' . $router;
        }
        $client = new \GuzzleHttp\Client(['base_uri' => $api]);
        $response = $client->request('POST', $router, [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'body'    => json_encode($req),
        ]);
        if ($response->getStatusCode() != 200) {
            throw new Exception('网络异常：' . $response->getBody()->getContents());
        }
        return $response->getBody()->getContents();
    }

    /**
     * @param string $clientId
     * @param string $secret
     *
     * @return Client
     */
    public static function newClient(string $clientId, string $secret): Client
    {
        $client = new Client();
        $client->clientId = $clientId;
        $client->secret = $secret;
        return $client;
    }
}