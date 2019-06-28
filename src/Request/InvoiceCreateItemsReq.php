<?php

namespace stlswm\PiaoZone\Request;

/**
 * Class InvoiceCreateItemsReq
 *
 * @package stlswm\PiaoZone\Request
 */
class InvoiceCreateItemsReq
{
    /**
     * @var string
     */
    public $specModel = '';
    /**
     * @var string
     */
    public $zeroTaxRateFlag = '';
    /**
     * @var string
     */
    public $taxAmount = '';
    /**
     * @var string
     */
    public $taxRate = '';
    /**
     * @var string
     */
    public $goodsCode = '';
    /**
     * @var string
     */
    public $unitPrice = '';
    /**
     * @var string
     */
    public $unit = '';
    /**
     * @var string
     */
    public $detailAmount = '';
    /**
     * @var string
     */
    public $discountType = '';
    /**
     * @var string
     */
    public $goodsName = '';
    /**
     * @var string
     */
    public $num = '';
    /**
     * @var string
     */
    public $preferentialPolicy = '';
    /**
     * @var string
     */
    public $vatException = '';
}