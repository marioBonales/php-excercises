<?
abstract class Worker{
    protected $name, $salary;

    protected abstract function calcSalary();

    public function printSalary(){
        echo "Name: {$this->name} - Salary: {$this->calcSalary()}";
    }
}
