<?
include("Person.php");
define("AGE",24);
define("NAME","Mario Bonales");
class PersonTest extends PHPUnit_Framework_TestCase{
    protected function setUp(){
        $this->person = new Person();
    }
    public function testPersonCanSetAndOutputAge(){
        $this->person->setAge(AGE);
        $this->expectOutputString((string)AGE);
        $this->person->printAge();
    }
    public function testPersonCanSetAndOutputName(){
        $this->person->setName(NAME);
        $this->expectOutputString(NAME);
        $this->person->printName();
    }
}
