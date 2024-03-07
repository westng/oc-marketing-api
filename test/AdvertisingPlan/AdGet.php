<?php
/**
 * 获取广告计划
 * User: westng
 * Date: 2024/4/12
 * Time: 17:23
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new ToutiaoSdk\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$args = [];
$req = $client::AdvertisingPlan()->AdGet()->setArgs($args)->send();
var_dump($req->getBody());
