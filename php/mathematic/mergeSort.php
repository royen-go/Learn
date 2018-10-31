<?php

$demo_array = array(23, 15, 43, 25, 54, 2, 6, 82, 11, 5, 21, 32, 65);


function merge_sort(array $lists)
{
    $n = count($lists);
    if ($n <= 1) {
        return $lists;
    }

    $mid = floor($n / 2);

    $left = merge_sort(array_slice($lists, 0, $mid));
    $right = merge_sort(array_slice($lists, $mid));
    $lists = merge($left, $right);
    return $lists;
}

function merge(array $left, array $right)
{
    $arr = [];
    $i = $j = 0;
    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] < $right[$j]) {
            $arr[] = $left[$i];
            $i++;
        } else {
            $arr[] = $right[$j];
            $j++;
        }
    }
    $arr = array_merge($arr, array_slice($left, $i));
    $arr = array_merge($arr, array_slice($right, $j));

    return $arr;
}

merge_sort($demo_array);
