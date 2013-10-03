<?php
include_once("Person.php");
class Employee extends Person{
    protected $salary;
    public function setSalary($salary){
        $this->salary = $salary;
    }
    public function printSalary(){
        echo $this->salary;
    }
}
