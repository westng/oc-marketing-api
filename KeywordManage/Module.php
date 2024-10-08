<?php
/*
 * @Date: 2024-10-08 10:42:52
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-10-08 13:07:30
 * @FilePath: /oc-marketing-api/KeywordManage/Module.php
 */

namespace KeywordManage;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function keywordCheckPost()
    {
        return new KeywordCheckPost($this->client);
    }

    public function keywordGet()
    {
        return new KeywordGet($this->client);
    }

    public function keywordPackageGet()
    {
        return new KeywordPackageGet($this->client);
    }

    public function keywordUpdatePost()
    {
        return new KeywordUpdatePost($this->client);
    }

    public function recommendKeywordsGet()
    {
        return new RecommendKeywordsGet($this->client);
    }
}
