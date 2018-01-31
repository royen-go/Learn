<?php




function dragonStrike($n)
{
    if ($n <= 0) {
        throw new \Exception('意外');
    }

    while(true) {

        $n--;
        $yieldExpressionResult = (yield $n);

        if ($yieldExpressionResult) {
            echo '击打一点生命值，当前对方还剩生命值::', $n ,PHP_EOL, $yieldExpressionResult, PHP_EOL;
        }
    }
}

$n = 20;
$ds = dragonStrike($n);

echo '神功准备[rewind()]' , PHP_EOL;
$ds->rewind();

$startTime = microtime(true);

while($ds->current() >= 0 ) {
    switch($ds->current()) {
        case 0:
            echo '击溃对方！', PHP_EOL;
            break;
        case round($n / 2):
            $ds->send('加油！对方生命值下降一半啦！！！');
            break;
        default:
            echo '击打一点生命值，当前对方还剩生命值:', $ds->current(), PHP_EOL;
    }

    $ds->next();
}

$endTime = microtime(true);

echo "击溃对方勇士", bcsub($endTime, $startTime, 4), 's', PHP_EOL;

