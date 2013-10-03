<?php
include("Person.php");
define("NAME","Mario Bonales");
define("AGE", 24);

class PersonTest extends PHPUnit_Framework_TestCase{

    protected function setUp(){
        $this->person = new Person();
        $this->person->setPersonalInfo(NAME,AGE);
    }

    public function testPersonalInfo(){
        $name = NAME;
        $age = AGE;
        $this->expectOutputString("Name: ${name} - Age: ${age}");
        $this->person->printPersonalInfo();
    }
}
