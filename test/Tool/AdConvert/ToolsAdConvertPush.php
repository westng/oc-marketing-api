<?php
/**
 * Created by PhpStorm.
 * User: westng
 * Date: 2024/4/1
 * Time: 15:06
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$req = $client::Tool()->adConvert->push();
$args = [];
$req->setArgs($args);;

print_r($client->excute($req));
