<?php
/**
 * 纵横组织资产账户列表
 * User: westng
 * Date: 2024/4/18
 * Time: 15:07
 */

namespace Advertiser;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class MajordomoAdvertise extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = '/2/majordomo/advertiser/select/';
    protected $content_type = 'application/json';

    /**
     * 广告主ID(账户管家ID)
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
     *
     * @throws InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }


}

