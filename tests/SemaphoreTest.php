<?php

namespace App\Tests;
use PHPUnit\Framework\TestCase;

/**
 * Date: 2017/4/15
 * Time: 19:02
 *
 * @link http://php.net/manual/zh/intro.sem.php
 */
class SemaphoreTest extends TestCase
{
    /**
     *
     * @group semaphoreA
     */
    public function testA()
    {
        $count = $this->get(5);
        echo 'from testA length is ' . $count;
        $this->assertTrue($count > 0);
    }

    /**
     *
     * @group semaphoreB
     */
    public function testB()
    {
        $count = $this->get(3);
        echo 'from testB length is ' . $count;
        $this->assertTrue($count > 0);
    }

    private function get($sleep = 5)
    {
        $id_key = ftok(__FILE__, 't');
        $sem_id = sem_get($id_key);

        if (sem_acquire($sem_id)) {
            $shm_id = shmop_open($id_key, 'c', 0644, 8);
            $count = (int) shmop_read($shm_id, 0, 8) + 1;

            sleep($sleep);

            shmop_write($shm_id, str_pad($count, 8, '0', STR_PAD_LEFT), 0);
            shmop_close($shm_id);
            sem_release($sem_id);
            return $count;
        }
    }

}

