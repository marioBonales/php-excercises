<?
abstract class Worker{
    public $name, $salary;

    public abstract function calcSalary();

    public function printSalary(){
        echo "Name: {$this->name} Salary: {$this->calcSalary()}";
    }
}
