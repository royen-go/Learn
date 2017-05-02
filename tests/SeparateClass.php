<?php

/**
 * Date: 2017/5/2
 * Time: 09:42
 */
class SeparateClass extends PHPUnit\Framework\TestCase
{
    public function testA()
    {
        $b = new B();
        $c = new C();

        $this->assertEquals(1, $b->sayA());
        $this->assertEquals(1, $c->sayA());

        $this->assertEquals(2, $b->sayS());
        $this->assertEquals(2, $c->sayS());

        $b->publicA += 1;
        $b::$staticA += 1;

        $this->assertEquals(2, $b->sayA());
        $this->assertEquals(1, $c->sayA());

        $this->assertEquals(3, $b->sayS());
        $this->assertEquals(3, $c->sayS());
    }
}

class A
{
    public $publicA = 1;
    static public $staticA = 2;
}

class B extends A
{
    public function sayA()
    {
        return $this->publicA;
    }

    public function sayS()
    {
        return static::$staticA;
    }
}


class C extends  A
{
    public function sayA()
    {
        return $this->publicA;
    }

    public function sayS()
    {
        return static::$staticA;
    }
}
