<?php
/*
 * @Date: 2024-09-27 09:53:13
 * @Description: 获取纵横组织下账户列表
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-09-27 12:08:03
 * @FilePath: /oc-marketing-api/Account/Information/AccountCustomerCenterAdvertiserList.php
 */

namespace Account\Information;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;
use Report\ReportAdGet;

class AccountCustomerCenterAdvertiserList extends RpcRequest
{
    protected $url = 'https://ad.oceanengine.com/open_api/2/customer_center/advertiser/list/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

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
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
    }
}
