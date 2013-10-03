<?php
include("Worker.php");
class Employee extends Worker{
    public $hours_worked, $hour_value;

    public function __construct($name,$hour_value){
    }

    protected function calcSalary(){
    }
    public function setHoursWorked($hours_worked){

    }

}
