<?php
include("Singleton.php");
class SingletonTest extends PHPUnit_Framework_TestCase{
    public function testSingleton(){
        $singleton = Singleton::getInstance();
        $singleton2 = Singleton::getInstance();
        $this->assertTrue($singleton === $singleton2);
        $this->assertEquals($singleton->getData(),"Data");
    }
}
