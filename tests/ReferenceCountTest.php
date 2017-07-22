<?php

namespace App\Tests;
use PHPUnit\Framework\TestCase;

/**
 * User: renshuai <renshuai@namedfish.com>
 * Date: 2017/2/11
 * Time: 11:43
 * IDE: PhpStorm
 */
class ReferenceCountTest extends TestCase
{

    public function testBasic()
    {
        $a = 'a';
        $b = & $a;

        unset($a);

        $this->assertEquals('a', $b);

    }

    public function testBasicArray()
    {
        $a = array('name' => 'ren');
        $b = $a;

        unset($a);

        $this->assertArrayHasKey('name', $b);
    }

    public function testBasic2()
    {
        $a = 'a';
        $b = $a;

        unset($a);

        $this->assertEquals('a', $b);
    }




}