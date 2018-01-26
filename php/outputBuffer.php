<?php
/* launched via php -doutput_buffering=32 -dimplicit_flush=1 -S127.0.0.1:8080 -t/Users/apple/Sites/Code/Learn/php */
echo str_repeat('a', 31);
sleep(1);
echo 'b';
sleep(5);
echo 'c';
