<?php

namespace stlswm\PiaoZone\Response;


use stlswm\JsonObject\ClassMap;

/**
 * Class InvoiceCreateReq
 *
 * @package stlswm\PiaoZone\Response
 */
class InvoiceCreateDataRes extends ClassMap
{
    public $invoiceCode = '';
    public $invoiceNo = '';
    public $pdfUrl = '';
    public $serialNo = '';
}