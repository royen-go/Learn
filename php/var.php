<?php

function test()
{
    $a = 0;
    echo $a;
    $a++;
}

test();

echo PHP_EOL;

/**
 *
 *
 *
 */

function test2()
{
    static $a = 0;
    echo $a;
    $a++;
}

test2();


echo PHP_EOL;

/**
 *
 *
 *
 */

$a = 20;

function myFunction($b) {
    $a = 30;
    global $a, $c;

    return $c = ( $a + $b );
}

echo myFunction(40) + $c;

echo PHP_EOL;

/**
 *
 *类静态变量
 *
 */

function &get_instance()
{
    $a = new stdClass();
    return $a;
}


class Main
{
    private static $instacne;

    function instance()
    {
        self::$instacne = &get_instance();

        return self::$instacne;
    }

    function instance2()
    {
        self::$instacne = new stdClass();
        return self::$instacne;
    }
}

$instance = (new Main())->instance2();
var_dump($instance);

echo PHP_EOL;

/**
 *
 * 局部静态变量
 *
 * 在 Zend 引擎 1 代，它驱动了 PHP4，对于变量的 static 和 global 定义是以引用的方式实现的。
 * 例如，在一个函数域内部用 global 语句导入的一个真正的全局变量实际上是建立了一个到全局变量的引用。
 * 这有可能导致预料之外的行为.
 * 类似的行为也适用于 static 语句。引用并不是静态地存储的：
 *
 * @link http://php.net/manual/zh/language.variables.scope.php
 */

function &get_instance_ref() {
    static $obj;

    echo 'Static object: ';
    var_dump($obj);
    if (!isset($obj)) {

        $std = new stdClass();
        // 将一个引用赋值给静态变量
        $obj = &$std;
    }
    return $obj;
}

$obj1 = get_instance_ref();
$still_obj1 = get_instance_ref();
//output
//Static object: NULL
//Static object: NULL

