<?php

$a = 20;

function myFunction($b) {
    $a = 30;
    global $a, $c;

    return $c = ( $a + $b );
}

echo myFunction(40) + $c;