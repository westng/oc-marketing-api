<?php
/**
 * Created by PhpStorm.
 * User: westng
 * Date: 2024/4/29
 * Time: 18:17
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$req = $client::Dmp()->dataSourceFileUpload();
$args = [];
$req->setArgs($args);

print_r($client->excute($req));
