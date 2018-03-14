<?php
//这时时间复杂度的渐进优势就表现出来了。
// 平均情况下快速排序的时间复杂度是Θ(nlgn)，最坏情况是n2，但通过随机算法可以避免最坏情况。
//由于递归调用，快排的空间复杂度是Θ(lgn)。



$demo_array = array(23,15,43,25,54,2,6,82,11,5,21,32,65);

function quickSort($array)
{
    if(!isset($array[1])) {
        return $array;
    }

    $mid = $array[0]; //获取一个用于分割的关键字，一般是首个元素
    $leftArray = array();
    $rightArray = array();

    foreach($array as $v)
    {
        if($v > $mid) {
            $rightArray[] = $v;  //把比$mid大的数放到一个数组里
        }

        if($v < $mid) {
            $leftArray[] = $v;   //把比$mid小的数放到另一个数组里
        }
    }

    $leftArray = quickSort($leftArray); //把比较小的数组再一次进行分割
    $leftArray[] = $mid;        //把分割的元素加到小的数组后面，不能忘了它哦

    $rightArray = quickSort($rightArray);  //把比较大的数组再一次进行分割
    return array_merge($leftArray,$rightArray);  //组合两个结果
}


var_dump(quickSort($demo_array));