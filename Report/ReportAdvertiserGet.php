<?php
/**
 * 获取广告账户数据
 * 此接口用于获取广告主账户数据。
 * User: westng
 * Date: 2024/4/28
 * Time: 16:20
 */

namespace Report;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ReportAdvertiserGet extends RpcRequest
{
    protected $url = 'https://ad.oceanengine.com/open_api/v1.0/qianchuan/report/advertiser/get/';
    protected $content_type = 'application/json';
    protected $method = 'GET';

    /**
     * 广告主ID
     */
    protected $advertiser_id;

    /**
     * @param mixed $args
     * @return $this
     */
    public function setArgs($args)
    {
        foreach ($args as $key => $value) {
            $this->params[$key] = $this->{$key} = $value;
        }
        return $this;
    }

    /**
     * @throws InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }
}
