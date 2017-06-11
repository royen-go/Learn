<?php
namespace Tests;


use PHPUnit\Framework\TestCase;

/**
 * Class RegularExpressionTest
 * @package Tests
 *
 *
 */
class RegularExpressionTest extends TestCase
{
    /**
     *
     */
    public function testDelimiters()
    {
        $value = 'The quick brown fox';

        $regEx = '/quick/';
        $match = preg_match($regEx, $value);
        $this->assertEquals(1, $match);

        $regEx = '#quick#';
        $match = preg_match($regEx, $value);
        $this->assertEquals(1, $match);

        $regEx = '+quick+';
        $match = preg_match($regEx, $value);
        $this->assertEquals(1, $match);

        $regEx = '%quick%';
        $match = preg_match($regEx, $value);
        $this->assertEquals(1, $match);

        $regEx = '~quick~';
        $match = preg_match($regEx, $value);
        $this->assertEquals(1, $match);
    }

    public function testMetacharacters()
    {
        $value = 'The [quick brown fox';

        $regEx = '/\[/';
        $match = preg_match($regEx, $value);
        $this->assertEquals(1, $match);


        $regEx = '/^The/';
        $match = preg_match($regEx, $value);
        $this->assertEquals(1, $match);

        $regEx = '/fox$/';
        $match = preg_match($regEx, $value);
        $this->assertEquals(1, $match);

        $regEx = '/T[a-z]/';
        $match = preg_match($regEx, $value);
        $this->assertEquals(1, $match);

        $regEx = '/(The)/';
        $match = preg_match($regEx, $value);
        $this->assertEquals(1, $match);

        $regEx = '/The{1}/';
        $match = preg_match($regEx, $value);
        $this->assertEquals(1, $match);

        $regEx = '/[^Aa-z]/';
        $match = preg_match($regEx, $value);
        $this->assertEquals(1, $match);
    }

    public function testEscapesequences()
    {
        $value = 'The [quick brown fox 123';

        $regEx = '/\d/';
        $match = preg_match($regEx, $value);
        $this->assertEquals(1, $match);

        $regEx = '/\s/';
        $match = preg_match($regEx, $value);
        $this->assertEquals(1, $match);

        $regEx = '/\w/';
        $match = preg_match($regEx, $value);
        $this->assertEquals(1, $match);
    }

}