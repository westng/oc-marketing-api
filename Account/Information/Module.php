<?php
/*
 * @Date: 2024-03-12 14:29:36
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-09-27 09:56:05
 * @FilePath: /oc-marketing-api/Account/Information/Module.php
 */

namespace Account\Information;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function accountAdvertiserGet()
    {
        return new AccountAdvertiserGet($this->client);
    }
    public function accountAdvertiserSelect()
    {
        return new AccountAdvertiserSelect($this->client);
    }
    public function accountAuthorizedGet()
    {
        return new AccountAuthorizedGet($this->client);
    }
    public function accountShopAdvertiserList()
    {
        return new AccountShopAdvertiserList($this->client);
    }
    public function accountToolAawemeAuth()
    {
        return new AccountToolAawemeAuth($this->client);
    }
    public function accountToolShopAuth()
    {
        return new AccountToolShopAuth($this->client);
    }

    public function accountCustomerCenterAdvertiserList()
    {
        return new AccountCustomerCenterAdvertiserList($this->client);
    }

}
