<?php

namespace stlswm\PiaoZone\Request;

/**
 * Class InvalidBlueReq
 * 作废蓝票请求体
 *
 * @package stlswm\PiaoZone\Request
 */
class InvalidBlueReq extends Req
{
    /**
     * @var string 开票流水号
     */
    public $serialNo;
}