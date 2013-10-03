<?php
include("Worker.php");
class Employee extends Worker{
    protected $hours_worked, $hour_value;

    public function __construct($name,$hour_value){
        $this->name = $name;
        $this->hour_value = $hour_value;
    }

    protected function calcSalary(){
        return $this->hours_worked * $this->hour_value;
    }
    public function setHoursWorked($hours_worked){
        $this->hours_worked = $hours_worked;
    }

}
