<?php
namespace App;


class SelfnStatic
{
    /**
     * @return SelfnStatic
     */
    public static function getSelf()
    {
        return new self();
    }


    /**
     * @return static
     */
    public static function getStatic()
    {
        return new static();
    }

}