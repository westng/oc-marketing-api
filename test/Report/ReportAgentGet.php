<?php
/**
 * Created by PhpStorm.
 * User: westng
 * Date: 2024/4/29
 * Time: 16:13
 */
require __DIR__.'/../../index.php';
require __DIR__.'/../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$req = $client::Report()->agentGet();
$args = [];
$req->setArgs($args);

print_r($client->excute($req));
