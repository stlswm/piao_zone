<?php

namespace stlswm\PiaoZone\Response;

use stlswm\JsonObject\ClassMap;

/**
 * Class AccessTokenRes
 *
 * @package stlswm\PiaoZone\Response
 */
class AccessTokenRes extends ClassMap
{
    use Res;
    /**
     * @var string $access_token
     */
    public $access_token = '';

    /**
     * @var string $token_type
     */
    public $token_type = '';

    /**
     * @var int $expires_in
     */
    public $expires_in = 0;

}