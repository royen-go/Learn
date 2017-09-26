<?php
namespace App\Tests\src;

use App\SelfnStatic;
use App\SelfnStaticSon;
use PHPUnit\Framework\TestCase;


/**
 * Class SelfnStaticTest
 */
class SelfnStaticTest extends TestCase {

    public function testSelf()
    {
        $instance = SelfnStatic::getSelf();
        $this->assertInstanceOf(SelfnStatic::class, $instance);

        $instance = SelfnStaticSon::getSelf();
        $this->assertInstanceOf(SelfnStatic::class, $instance);
    }

    public function testStatic()
    {
        $instance = SelfnStatic::getStatic();
        $this->assertInstanceOf(SelfnStatic::class, $instance);

        /**
         * ====================
         * 特别注意!!!
         * ====================
         */
        $instance = SelfnStaticSon::getStatic();
        $this->assertInstanceOf(SelfnStaticSon::class, $instance);
    }

}
