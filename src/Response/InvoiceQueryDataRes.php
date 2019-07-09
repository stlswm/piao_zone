<?php


namespace stlswm\PiaoZone\Response;

use stlswm\JsonObject\ClassMap;

/**
 * Class InvoiceQueryDataRes
 *
 * @package stlswm\PiaoZone\Response
 */
class InvoiceQueryDataRes extends ClassMap
{
    /**
     * @var string 开票请求唯一流水号
     */
    public $serialNo;
    /**
     * @var string 0蓝票，1红票
     */
    public $type;
    /**
     * @var string 发票代码
     */
    public $invoiceCode;
    /**
     * @var string 发票号码
     */
    public $invoiceNo;
    /**
     * @var string 开票日期，格式2015-11-12 17:43:51
     */
    public $invoiceDate;
    /**
     * @var string 不含税金额
     */
    public $invoiceAmount;
    /**
     * @var string 税额
     */
    public $totalTaxAmount;
    /**
     * @var string 价税合计金额
     */
    public $totalAmount;
    /**
     * @var string 价税合计金额繁体
     */
    public $totalAmountCn;
    /**
     * @var string 开票员
     */
    public $drawer;
    /**
     * @var string 收款员
     */
    public $payee;
    /**
     * @var string 复核人
     */
    public $reviewer;
    /**
     * @var string 原发票代码
     */
    public $originalInvoiceCode;
    /**
     * @var string 原发票号码
     */
    public $originalInvoiceNo;
    /**
     * @var string 备注
     */
    public $remark;
    /**
     * @var string 销货方识别号
     */
    public $salerTaxNo;
    /**
     * @var string 销货方名称
     */
    public $salerName;
    /**
     * @var string 销货方地址、固定电话
     */
    public $salerAddressPhone;
    /**
     * @var string 销货方银行账号
     */
    public $salerAccount;
    /**
     * @var string 购货方方识别号
     */
    public $buyerTaxNo;
    /**
     * @var string 购货方名称
     */
    public $buyerName;
    /**
     * @var string 购货方地址、固定电话
     */
    public $buyerAddressPhone;
    /**
     * @var string 购货方银行账号
     */
    public $buyerAccount;
    /**
     * @var string 购货方手机
     */
    public $buyerMobilePhone;
    /**
     * @var string 校验码
     */
    public $checkCode;
    /**
     * @var string 微信卡包
     */
    public $wxCardBagUrl;
    /**
     * @var string pdfUrl 发票pdf下载地址
     */
    public $pdfUrl;
    /**
     * @var string 发票种类：1、普通电子发票；2、电子发票专票；3、普通纸质发票；4、专用纸质发票；5、普通纸质卷票
     */
    public $invoiceType;
    /**
     * @var string 发票状态0:正常、1：失控、2：作废、3：红冲、4：异常
     */
    public $invoiceStatus;
    /**
     * @var array 发票内容明细数组
     */
    public $items;

    /**
     * @return array
     */
    public function getClassMap(): array
    {
        return [
            'items' => [InvoiceQueryDataItemRes::class],
        ];
    }
}