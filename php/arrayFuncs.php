<?php

$func = function(&$val, $key) {
    echo $val, $key, PHP_EOL;

    $val .= "_$key";
};

$arr = ['apple', 'orange'];

array_walk($arr, $func);

var_dump($arr);


array_shift($arr);

var_dump($arr);

$dbRows = [
    [
        'id' => 3,
        'name' => 'apple',
        'title' => 'a'
    ],
    [
        'id' => 22,
        'name' => 'page',
        'title' => 'b'
    ],
    [
        'id' => 89,
        'name' => 'egg'
    ]
];

$ids = array_column($dbRows, 'id');

var_dump($ids);

$idNameArr = array_column($dbRows, 'name', 'id');

var_dump($idNameArr);