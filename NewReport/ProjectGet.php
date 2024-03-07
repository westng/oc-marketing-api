<?php
/**
 * 项目数据报表
 * User: westng
 * Date: 2024/09/26
 * Time: 15:00
 */

namespace NewReport;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ProjectGet extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = '/v3.0/report/project/get/';
    protected $content_type = 'application/json';

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
        $this->url .= '?';
        foreach ($args as $key => $value) {
            if (!is_array($value)) {
                $this->url .= $key . '=' . $value . '&';
            } else {
                $this->url .= $key . '=' . json_encode($value) . '&';
            }
        }
        $this->url = rtrim($this->url, '&');
        return $this;
    }

    /**
     *
     * @throws InvalidParamException
     */
    public function check()
    {

    }


}
