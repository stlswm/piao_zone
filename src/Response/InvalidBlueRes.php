<?php

namespace stlswm\PiaoZone\Request;

use stlswm\JsonObject\ClassMap;
use stlswm\PiaoZone\Response\InvalidBlueDataRes;
use stlswm\PiaoZone\Response\Res;

/**
 * Class InvalidBlueRes
 * 作废蓝票响应体
 *
 * @package stlswm\PiaoZone\Request
 */
class InvalidBlueRes extends ClassMap
{
    use Res;
    /**
     * @var array
     */
    public $data = [];

    /**
     * @return array
     */
    public function getClassMap(): array
    {
        return [
            'data' => InvalidBlueDataRes::class,
        ];
    }
}