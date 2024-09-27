<?php
/*
 * @Date: 2024-09-27 09:53:13
 * @Description: 获取纵横组织下账户列表
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-09-27 09:55:27
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
     * 纵横组织id
     * @var int $cc_account_id
     */
    protected $cc_account_id;

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
        RequestCheckUtil::checkNotNull($this->cc_account_id, 'cc_account_id');
    }
}
