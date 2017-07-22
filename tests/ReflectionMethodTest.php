<?php

namespace App\Tests;
use PHPUnit\Framework\TestCase;
use ReflectionMethod;

/**
 * Class ReflectionMethodTest
 *
 */
class ReflectionMethodTest extends TestCase
{
    public function testCall()
    {
        $instance = new C();
        $method = 'sayC';
        $name = 'hello';

        if (method_exists($instance, $method)) {
            $reflector = new ReflectionMethod($instance, $method);

            $parameters = [];
            foreach($reflector->getParameters() as $key => $parameter) {
                $class = $parameter->getClass();
                if ($class ) {

                    $parameters[] = new $class->name;
                }
            }
            $parameters[] = $name;

            $result = call_user_func_array([$instance, $method], $parameters);

            $this->assertEquals('d hello', $result);
        }

    }
}

class C
{
    public function sayC(D $d, $name)
    {
        return $d->name . ' ' . $name;
    }
}

class D
{
    public $name = 'd';
}

