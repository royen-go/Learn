<?php

/**
 * Class TypeConversionTest
 *
 */
final class TypeConversionTest extends PHPUnit\Framework\TestCase {

    public function testStringTypeConversion()
    {
        $a = 0 == "a" ? 1 : 2;  //字符串"a"转化为了数字0
        $this->assertEquals(1, $a);
    }

    public function testStringTypeConversionA()
    {
        $a = 123 == "123foo" ? 1 : 2;
        $this->assertEquals(1, $a);
    }

    public function testStringTypeConversionB()
    {
        $a = 0123 == "0123foo" ? 1 : 2;  //0123是八进制的83，但是"0123foo"转换成数字变成了123
        $this->assertEquals(2, $a);
    }


    public function testStringTypeConversionC()
    {
        $a = 0 == "a123" ? 1 : 2;  // non-empty non-numeric strings being converted to 0.
        $this->assertEquals(1, $a);
    }

    public function testStringTypeConversionD()
    {
        $a = 123 == '123';
        $this->assertTrue($a);
    }

    public function testStringTypeConversionE()
    {
        //A word of caution - the dot operator has the same precedence as + and -, which can yield unexpected results.
        $a = 'Testing ' . 1 + 2 . '45';
        $this->assertEquals(245, $a);
    }

}