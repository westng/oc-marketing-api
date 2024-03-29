<?php
/**
 * 查询应用信息
 * User: westng
 * Date: 2024/4/31
 * Time: 17:46
 */

namespace Tool\AppManagement;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class AppGetApp extends RpcRequest
{
    protected $url = '/2/tools/app_management/app/get/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 操作的广告主id
     * @var int $advertiser_id
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
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {

    }
}
