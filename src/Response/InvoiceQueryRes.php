<?php


namespace stlswm\PiaoZone\Response;

use stlswm\JsonObject\ClassMap;

/**
 * Class InvoiceQueryRes
 *
 * @package stlswm\PiaoZone\Response
 */
class InvoiceQueryRes extends ClassMap
{
    use Res;

    /**
     * @return array
     */
    public function getClassMap(): array
    {
        return [
            'data' => InvoiceQueryDataRes::class,
        ];
    }

    /**
     * @var array
     */
    public $data = [];
}