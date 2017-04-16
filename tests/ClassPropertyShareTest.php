<?php

/**
 * Date: 2017/4/15
 * Time: 19:02
 */
class ClassPropertyShareTest extends PHPUnit\Framework\TestCase
{
    /**
     * @group class
     */
    public function testPropertySharing()
    {
        $b = new B();
        $c = new C();

        $group = $b->getGroup();
        $team = $b->getTeam();

        $this->assertEquals('b', $group);
        $this->assertEquals('team2', $team);

        $group = $c->getGroup();
        $team = $c->getTeam();

        $this->assertEquals('a', $group);
        $this->assertEquals('team2', $team);
    }
}




class A
{
    protected $group = 'a';
    static protected $team = 'team';

    public function getGroup()
    {
        return $this->group;
    }

    public function getTeam()
    {
        return self::$team;
    }
}

class B extends A
{
    public function __construct()
    {
        $this->group = 'b';
        self::$team = 'team2';
    }

}

class C extends A
{

}