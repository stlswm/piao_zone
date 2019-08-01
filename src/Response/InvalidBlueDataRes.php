<?php

namespace stlswm\PiaoZone\Response;


use stlswm\JsonObject\ClassMap;

/**
 * Class InvalidBlueDataRes
 *
 * @package stlswm\PiaoZone\Response
 */
class InvalidBlueDataRes extends ClassMap
{
    public $invoiceCode = '';
    public $invoiceNo = '';
    public $pdfUrl = '';
    public $serialNo = '';
}