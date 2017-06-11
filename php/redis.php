<?php


$redis = new Redis();
$redis->connect('localhost');

$lockKey = 'mywatchkey';

$mywatchkey = $redis->get($lockKey);

$redis->watch($lockKey);

$redis->multi();

echo date('H:i:s') . PHP_EOL;

sleep(5);

$redis->set($lockKey, $mywatchkey + 1);

$redis->exec();


echo $redis->get($lockKey);
