<?
include("../Person.php");
class PersonTest extends PHPUnit_Framework_TestCase{

    protected function setUp(){
        $data = array(
            "name" => "Mario",
            "last_name" => "Bonales",
            "age" => 24,
            "email" => "me@mariobonales.com",
            "telephone" => "1111111111"
        );
        $this->db = $this->db = new PDO('mysql:host=localhost;dbname=exercise_test;','exercise_test','exercise9');
        $this->person = new Person($data,$this->db);
    }

    public function testPersonCanBeSaved(){
        $this->assertTrue($this->person->save());
        $this->assertTrue(Person::fetch($this->person->id,$this->db) instanceof Person );
    }

    public function testPersonCanBeDeleted(){
        $this->person->save();
        $id = $this->person->id;
        $this->person->delete();
        $this->assertNull(Person::fetch($id,$this->db));
    }

    public function testPersonGetsIdInFetch(){
        $this->person->save();
        $id = $this->person->id;
        $person = Person::fetch($id,$this->db);
        $this->assertTrue($person->id != null);
    }

}
