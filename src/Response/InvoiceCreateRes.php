<?php

namespace stlswm\PiaoZone\Response;


use stlswm\JsonObject\ClassMap;

/**
 * Class InvoiceCreateReq
 *
 * @package stlswm\PiaoZone\Response
 */
class InvoiceCreateRes extends ClassMap
{
    use Res;

    /**
     * @return array
     */
    public function getClassMap(): array
    {
        return [
            'data' => [
                InvoiceCreateDataRes::class,
            ]
        ];
    }

    /**
     * @var array
     */
    public $data = [];
}