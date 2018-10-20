<?php
//这时时间复杂度的渐进优势就表现出来了。
// 平均情况下快速排序的时间复杂度是Θ(nlgn)，最坏情况是n^2，但通过随机算法可以避免最坏情况。
//由于递归调用，快排的空间复杂度是Θ(lgn)。

$demo_array = array(23, 15, 43, 25, 54, 2, 6, 82, 11, 5, 21, 32, 65);

function quickSort(array $array)
{

    $arrCount = count($array);
    if ($arrCount < 2) {
        return $array;
    }

    $mid = $array[$arrCount - 1];

    $leftArray = $rightArray = [];

    foreach ($array as $item) {

        if ($item > $mid) {
            $rightArray[] = $item;
        }

        if ($item < $mid) {
            $leftArray[] = $item;
        }
    }

    return array_merge(quickSort($leftArray), [$mid], quickSort($rightArray));
}

var_dump(quickSort($demo_array));
