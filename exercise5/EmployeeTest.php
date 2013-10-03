<?php
include("Employee.php");
define("NAME","Mario Bonales");
define("AGE",24);
define("SALARY",30000);
class EmployeeTest extends PHPUnit_Framework_TestCase{
    protected function setUp(){
        $this->employee = new Employee();
        $this->employee->setPersonalInfo(NAME,AGE);
        $this->employee->setSalary(SALARY);
    }
    public function testEmployeePersonalInfo(){
        $name = NAME;
        $age = AGE;
        $salary = SALARY;
        $this->ExpectOutputString("Name: ${name} - Age: ${age} - Salary: ${salary}");
        $this->employee->printPersonalInfo();
    }
}
?>
