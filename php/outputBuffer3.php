<?php


ob_start();
for ($i = 0; $i < 10; $i++) {
    echo $i;
}

$output = ob_get_contents();
ob_end_clean();
echo $output;
