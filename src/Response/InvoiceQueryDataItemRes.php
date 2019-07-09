<?php

namespace stlswm\PiaoZone\Response;

use stlswm\JsonObject\ClassMap;

/**
 * Class InvoiceQueryDataItemRes
 *
 * @package stlswm\PiaoZone\Response
 */
class InvoiceQueryDataItemRes extends ClassMap
{
    /**
     * @var string 项目单位
     */
    public $unit = '';
    /**
     * @var string 规格型号
     */
    public $specModel = '';
    /**
     * @var string 税额
     */
    public $taxAmount = '';
    /**
     * @var string 项目名称
     */
    public $goodsName = '';
    /**
     * @var string 项目单价
     */
    public $unitPrice = '';
    /**
     * @var string 项目数量
     */
    public $num = '';
    /**
     * @var string 项目金额
     */
    public $detailAmount = '';
    /**
     * @var string 税率
     */
    public $taxRate = '';
    /**
     * @var string 商品编码
     */
    public $goodsCode = '';
    /**
     * @var string 折扣行
     */
    public $zeroTaxRateFlag = '';
    /**
     * @var string 折扣行
     */
    public $discountType = '';
    /**
     * @var string 优惠政策标识
     */
    public $preferentialPolicy = '';
    /**
     * @var string 增值税特殊管理
     */
    public $vatException = '';
}