<?php
//关于冒泡排序的就这么多，归纳起来，主要就是两点：循环比较,交换键值
//冒泡排序（Bubble Sort）是一种简单的排序算法。
// 它重复地走访过要排序的数列，一次比较两个元素，如果他们的顺序错误就把他们交换过来。
// 插入排序和冒泡排序在平均和最坏情况下的时间复杂度都是O(n^2)，最好情况下都是O(n)，空间复杂度是O(1)。

$demo_array = array(23,15,43,25,54,2,6,82,11,5,21,32,65);

// 第一层for循环可以理解为从数组中键为0开始循环到最后一个
for ($i=0;$i<count($demo_array);$i++) {
    // 第二层将从键为$i的地方循环到数组最后
    for ($j=$i+1;$j<count($demo_array);$j++) {
        // 比较数组中相邻两个值的大小
        if ($demo_array[$i] > $demo_array[$j]) {
            $tmp            = $demo_array[$i]; // 这里的tmp是临时变量
            $demo_array[$i] = $demo_array[$j]; // 第一次更换位置
            $demo_array[$j] = $tmp;            // 完成位置互换
        }
    }
}

// 打印结果集
echo '<pre>';
var_dump($demo_array);
echo '</pre>';
