<?php
include("Employee.php");
define("NAME","Mario");
define("HOUR_VALUE",3.5);
define("HOURS_WORKED", 30);
class EmployeeTest extends PHPUnit_Framework_TestCase{

    protected function setUp(){
        $this->employee = new Employee(NAME,HOUR_VALUE);
        $this->employee->setHoursWorked(HOURS_WORKED);
    }
    public function testEmployeeSalary(){
        $salary = HOUR_VALUE * HOURS_WORKED;
        $name = NAME;
        $this->expectOutputString("Name: ${name} - Salary: ${salary}");
        $this->employee->printSalary();
    }
}
