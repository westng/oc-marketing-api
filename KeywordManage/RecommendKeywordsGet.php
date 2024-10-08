<?php
/*
 * @Date: 2024-10-08 10:43:47
 * @Description: 获取系统推荐的搜索关键词
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-10-08 13:05:39
 * @FilePath: /oc-marketing-api/KeywordManage/RecommendKeywordsGet.php
 */

namespace KeywordManage;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class RecommendKeywordsGet extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = 'https://ad.oceanengine.com/open_api/v1.0/qianchuan/ad/recommend_keywords/get/';
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
    }
}
