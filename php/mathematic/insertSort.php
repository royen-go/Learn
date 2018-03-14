<?php
//最坏情况就是，序列是降序排列，那么此时需要进行的比较共有n(n-1)/2次。
// 插入排序的赋值操作是比较操作的次数加上(n-1）次。 平均来说插入排序算法的时间复杂度为O(n^2）。

$demo_array = array(23, 15, 43, 25, 54, 2, 6, 82, 11, 5, 21, 32, 65);

function insertSort($arr)
{
    //获取需要排序的长度
    $length = count($arr);
    //假定第一个为有序的，所以从$i开始比较
    for ($i = 1; $i < $length; $i++) {
        //存放待比较的值
        $tmp = $arr[$i];
        for ($j = $i - 1; $j >= 0; $j--) {
            //若插入值比较小，则将后面的元素后移一位，并将值插入
            if ($tmp < $arr[$j]) {
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $tmp;
            } else {
                break;
            }
        }
    }

    return $arr;
}

insertSort($demo_array);

