<?php
/**
 * 查询动态创意词包
 * User: westng
 * Date: 2024/4/31
 * Time: 14:19
 */

namespace Tool\CreativeWord;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsCreativeWordSelect extends RpcRequest
{
    protected $url = '/2/tools/creative_word/select/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
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
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }
}
