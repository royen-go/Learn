<?php
/* launched via php -doutput_buffering=32 -dimplicit_flush=1 -S127.0.0.1:8080 -t/Users/apple/Sites/Code/Learn/php */
ob_start(function($ctc) { static $a = 0; return $a++ . '- ' . $ctc . "\n";}, 10);
ob_start(function($ctc) { return ucfirst($ctc); }, 3);
echo "fo";
sleep(2);
echo 'o';
sleep(2);
echo "barbazz";
sleep(2);
echo "hello";