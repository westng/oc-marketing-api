<?php
/**
 * Created by PhpStorm.
 * User: westng
 * Date: 2024/4/31
 * Time: 15:06
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);
$req = $client::Tool()->queryTool->estimateAudience();
print_r($client->excute($req));
