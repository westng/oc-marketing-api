<?php 
/*
 * @Author: west_ng 457395070@qq.com
 * @Date: 2024-07-15 21:46:58
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-07-16 14:42:41
 * @FilePath: /oc-marketing-api/DataReport/AdReport/AdReportAdvertiserAdGet.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */
/**
 * 获取全域推广直播间维度数据 
 * 
 * User: westng
 * Date: 2024/6/15
 * Time: 10:45
 *
 */

namespace DataReport\AdReport;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class AdReportUniPromotionDimensionDataRoomGet extends RpcRequest
{
    protected $url = 'https://api.oceanengine.com/open_api/v1.0/qianchuan/report/uni_promotion/dimension_data/room/get/';
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
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }
}
