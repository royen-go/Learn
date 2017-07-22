<?php

namespace App\Tests;
use PHPUnit\Framework\TestCase;

/**
 * Class ComprehensiveTest
 *
 *
 */
class ComprehensiveTest extends TestCase {

    public function testEmpty()
    {
        $this->assertTrue(empty(null));

        $this->assertTrue(empty(0));

        $this->assertTrue(empty(false));

        $this->assertTrue(empty(''));

        $this->assertTrue(empty('0')); //自己搞错了

        $this->assertTrue(empty(array()));

        $this->assertFalse(empty('null'));

        $this->assertFalse(empty(array(array())));
    }

    public function testOb()
    {
        ob_start();

        for($i =0; $i < 5; $i++) {
            echo $i;
        }

        $output = ob_get_contents();

        ob_end_clean();

        $this->assertEquals('01234', $output);
    }



}