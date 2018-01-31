<?php

/**
 * Class TestController
 *
 */
class TestController
{
    /**
     * @name index
     * @desc 描述
     *
     * @param $id
     * @return void
     */
    public function indexAction($id)
    {
        //code
    }
}


$reflectionClass = new ReflectionClass('TestController');
$reflectionMethod = $reflectionClass->getMethod('indexAction');
$reflectionAnnotation = $reflectionMethod->getDocComment();

var_dump($reflectionAnnotation);
