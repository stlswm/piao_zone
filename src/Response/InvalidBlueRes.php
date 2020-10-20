<?php

namespace stlswm\PiaoZone\Response;

use stlswm\JsonObject\ClassMap;

/**
 * Class InvalidBlueRes
 * 作废蓝票响应体
 * @package stlswm\PiaoZone\Request
 */
class InvalidBlueRes extends ClassMap
{
    use Res;

    /**
     * @var InvalidBlueDataRes $data
     */
    public $data;

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