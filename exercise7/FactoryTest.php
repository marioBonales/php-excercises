<?php
include("Factory.php");
define("NAME","factory");
class FactoryTest extends PHPUnit_Framework_TestCase{
    public function testFactory(){
        $factory = Factory::build(NAME);
        $this->assertEquals($factory->getName(),NAME);
    }
}
