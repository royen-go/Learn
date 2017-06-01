<?php

//php php/fileLock.php && php php/fileLock.php

$fp = fopen("./files/lock.txt", "w+");

//阻塞
$result = flock($fp, LOCK_EX);

//非阻塞
//$result = flock($fp, LOCK_EX | LOCK_NB);

if ($result) {
    echo date('Y-m-d H:i:s');
    echo PHP_EOL;
    sleep(10);
    $unlockResult = flock($fp, LOCK_UN);
} else {
    echo 'file is lock';
}

fclose($fp);