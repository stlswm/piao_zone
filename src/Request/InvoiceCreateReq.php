<?php

namespace stlswm\PiaoZone\Request;

/**
 * Class InvoiceCreateReq
 *
 * @package stlswm\PiaoZone\Request
 */
class InvoiceCreateReq extends Req
{
    /**
     * InvoiceCreateReq constructor.
     *
     * @param InvoiceCreateItemsReq ...$invoiceCreateItems
     */
    public function __construct(InvoiceCreateItemsReq... $invoiceCreateItems)
    {
        $this->items = $invoiceCreateItems;
    }

    /**
     * @var string
     */
    public $serialNo = '';
    /**
     * @var string
     */
    public $taxFlag = '';
    /**
     * @var string
     */
    public $inventoryFlag = '';
    /**
     * @var string
     */
    public $inventoryProjectName = '';
    /**
     * @var string
     */
    public $buyerFixedTelephone = '';
    /**
     * @var string
     */
    public $buyerAddress = '';
    /**
     * @var string
     */
    public $buyerName = '';
    /**
     * @var string
     */
    public $buyerTaxNo = '';
    /**
     * @var string
     */
    public $buyerAccount = '';
    /**
     * @var string
     */
    public $buyerMobilePhone = '';
    /**
     * @var string
     */
    public $buyerEmail = '';
    /**
     * @var string
     */
    public $invoiceAmount = '';
    /**
     * @var string
     */
    public $totalAmount = '';
    /**
     * @var string
     */
    public $totalTaxAmount = '';
    /**
     * @var string
     */
    public $type = '';
    /**
     * @var string
     */
    public $drawer = '';
    /**
     * @var string
     */
    public $reviewer = '';
    /**
     * @var string
     */
    public $payee = '';
    /**
     * @var string
     */
    public $originalInvoiceCode = '';
    /**
     * @var string
     */
    public $originalInvoiceNo = '';
    /**
     * @var string
     */
    public $remark = '';
    /**
     * @var array
     */
    public $items = [];
}