<?php
include("Employee.php");
define("SALARY",30000);
define("AGE",24);
class EmployeeTest extends PHPUnit_Framework_TestCase{
    protected function setUp(){
        $this->employee = new Employee();
    }
    public function testEmployeeSalaryGetAndOutput(){
        $this->employee->setSalary(SALARY);
        $this->expectOutputString((string)SALARY);
        $this->employee->printSalary();
    }

    public function testEmployeeAgeGetAndOutput(){
        $this->employee->setAge(AGE);
        $this->expectOutputString(AGE);
        $this->employee->printAge();
    }

}
