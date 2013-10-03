<?php
class Person{
    protected $name, $age;
    public function setAge($age){
    }

    public function printPersonalInfo(){
        echo "Name: {$this->name} - Age: {$this->age}";
    }

    public function setPersonalInfo($name,$age){
        $this->name = $name;
        $this->age = $age;
    }

}
