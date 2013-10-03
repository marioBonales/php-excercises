<?php
include("Person.php");
class Employee extends Person{
    protected $salary;

    public function setSalary($salary){
        $this->salary = $salary;
    }

    public function printPersonalInfo(){
        echo "Name: {$this->name} - Age: {$this->age} - Salary: {$this->salary}";
    }



}
