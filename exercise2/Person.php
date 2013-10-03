<?php
class Person{
    protected $name, $age;
    public function setAge($age){
        $this->age = $age;
    }
    public function setName($name){
        $this->name = $name;
    }

    public function printAge(){
        echo $this->age;
    }

    public function printName(){
        echo $this->name;
    }
}
