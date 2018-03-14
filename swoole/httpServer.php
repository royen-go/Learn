<?php
$http = new swoole_http_server("127.0.0.1", 9501);
$http->on('request', function ($request, $response) {
    echo 'test' . PHP_EOL;
    $response->end("<h1>Hello Swoole. #".rand(1000, 9999)."</h1>");
});
$http->start();
