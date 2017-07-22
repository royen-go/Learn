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
        $instance = SelfnStaticSon::getSelf();
        $this->assertInstanceOf(SelfnStatic::class, $instance);
    }

    public function testStatic()
    {
        $instance = SelfnStaticSon::getStatic();
        $this->assertInstanceOf(SelfnStaticSon::class, $instance);
    }

}
