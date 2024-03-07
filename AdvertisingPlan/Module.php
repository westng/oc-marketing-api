<?php
/**
 * Created by PhpStorm.
 * User: westng
 * Date: 2024/3/7
 * Time: 17:23
 */

namespace AdvertisingPlan;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function AdCreate()
    {
        return new AdCreate($this->client);
    }

    public function adGet()
    {
        return new AdGet($this->client);
    }

    public function adUpdate()
    {
        return new AdUpdate($this->client);
    }

    public function adUpdateBid()
    {
        return new AdUpdateBid($this->client);
    }

    public function adUpdateBudget()
    {
        return new AdUpdateBudget($this->client);
    }

    public function adUpdateStatus()
    {
        return new AdUpdateStatus($this->client);
    }
}
