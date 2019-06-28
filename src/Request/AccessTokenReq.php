<?php

namespace stlswm\PiaoZone\Request;

/**
 * Class AccessTokenReq
 *
 * @package stlswm\PiaoZone\Request
 */
class AccessTokenReq extends Req
{
    /**
     * @var string $client_id
     */
    public $client_id = '';

    /**
     * @var string $sign
     */
    public $sign = '';

    /**
     * @var int $timestamp
     */
    public $timestamp = 0;
}