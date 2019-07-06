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
     * @var string 请求加密秘钥
     */
    public $encryptKey;

    /**
     * @var bool
     */
    private $isTest = FALSE;

    /**
     * @var string 接口请求凭证
     */
    private $token;


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
     * @param string $token
     */
    public function setToken(string $token)
    {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * 加密请求体
     *
     * @param string $body
     *
     * @return string
     * @throws Exception
     *
     */
    private function encryptBody(string $body): string
    {
        if (strlen($this->encryptKey) != 16) {
            throw new Exception('错误的加密秘钥');
        }
        $bodyEncrypt = openssl_encrypt($body, 'AES-128-ECB', $this->encryptKey, OPENSSL_RAW_DATA);
        return base64_encode($bodyEncrypt);
    }

    /**
     * 请求接口
     *
     * @param string $router
     * @param Req    $req
     * @param bool   $encrypt
     *
     * @return string
     * @throws GuzzleException
     * @throws Exception
     */
    public function request(string $router, Req $req, bool $encrypt = FALSE): string
    {
        $api = self::$domain;
        if ($this->isTest) {
            $api = self::$domainTest;
        }
        if (strpos($router, '/') !== 0) {
            $router = '/' . $router;
        }
        $body = json_encode($req);
        if ($encrypt) {
            $body = $this->encryptBody($body);
        }
        $client = new \GuzzleHttp\Client(['base_uri' => $api]);
        $response = $client->request('POST', $router, [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'body'    => $body,
        ]);
        if ($response->getStatusCode() != 200) {
            throw new Exception('网络异常：' . $response->getBody()->getContents());
        }
        return $response->getBody()->getContents();
    }

    /**
     * @param string $clientId
     * @param string $secret
     * @param string $encryptKey
     *
     * @return Client
     */
    public static function newClient(string $clientId, string $secret, string $encryptKey): Client
    {
        $client = new Client();
        $client->clientId = $clientId;
        $client->secret = $secret;
        $client->encryptKey = $encryptKey;
        return $client;
    }
}