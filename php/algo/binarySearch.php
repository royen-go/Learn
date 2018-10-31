<?php

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);


function bsearch(array $arr, $val)
{
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = intval(floor(($high + $low) / 2));

        $midVal = $arr[$mid];
        if ($midVal == $val) {
            return $mid;
        } elseif ($midVal < $val) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }
    return -1;
}

function bsearch2(array $arr, $low, $high, $val)
{
    $mid = intval(floor(($high + $low) / 2));
    $midVal = $arr[$mid];

    if ($low > $high) {
        return -1;
    }

    if ($midVal == $val) {
        return $mid;
    } elseif ($midVal < $val) {
        return bsearch2($arr, $mid + 1, $high, $val);
    } else {
        return bsearch2($arr, $low, $mid - 1, $val);
    }
}

for ($i = 1; $i < 11; $i++) {
//    var_dump(bsearch($array, $i));
//    var_dump(bsearch2($array,0, 10, $i));
}


//查找第一个值等于给定值的
$array3 = array(1, 2, 3, 4, 5, 6, 7, 7, 7, 8, 9);

function bsearch3(array $arr, $val)
{
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = intval(floor(($high + $low) / 2));

        $midVal = $arr[$mid];
        if ($midVal > $val) {
            $high = $mid - 1;
        } elseif ($midVal < $val) {
            $low = $mid + 1;
        } else {

            if ($mid == 0 || $val != $arr[$mid - 1]) {
                return $mid;
            } else {
                $high = $mid - 1;
            }

        }
    }
    return -1;
}


//var_dump(bsearch3($array3, 7));

//查找最后一个值等于给定值的
$array4 = array(1, 2, 3, 4, 5, 6, 7, 7, 7, 8, 9);

function bsearch4(array $arr, $val)
{
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = intval(floor(($high + $low) / 2));

        $midVal = $arr[$mid];
        if ($midVal > $val) {
            $high = $mid - 1;
        } elseif ($midVal < $val) {
            $low = $mid + 1;
        } else {

            if ($mid == count($arr) - 1 || $val != $arr[$mid + 1]) {
                return $mid;
            } else {
                $low = $mid + 1;
            }
        }
    }
    return -1;
}


//var_dump(bsearch4($array4, 7));

//查找第一个大于等于给定值的
$array5 = array(3, 4, 6, 7, 10);

function bsearch5(array $arr, $val)
{
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = intval(floor(($high + $low) / 2));
        $midVal = $arr[$mid];
        if ($midVal >= $val) {
            if ($mid == 0 || ($arr[$mid - 1] < $val )) {
                return $mid;
            } else {
                $high = $mid - 1;
            }

        } else {
            $low = $mid + 1;
        }
    }
    return -1;
}


$result = bsearch5($array5, 5);
//var_dump($result);

//查找最后一个小于等于给定值的
$array6 = array(3, 4, 6, 7, 10);

function bsearch6(array $arr, $val)
{
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = intval(floor(($high + $low) / 2));
        $midVal = $arr[$mid];
        if ($val >= $midVal) {
            if ($mid == count($arr) - 1 || ($arr[$mid + 1] > $val )) {
                return $mid;
            } else {
                $low = $mid + 1;
            }

        } else {
            $high = $mid - 1;
        }
    }
    return -1;
}


$result = bsearch6($array6, 5);
var_dump($result);
