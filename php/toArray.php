<?php

$str = '你好太阳';

$arr = preg_split('/(?<!^)(?!$)/u', $str);

var_export($arr);
