<?php
include ("Worker.php");
class Boss extends Worker{
    protected $salary, $profit;
    public function __construct($name,$salary){
        $this->name = $name;
        $this->salary = $salary;
    }

    public function setProfit($profit){
        $this->profit = $profit;
    }

    protected function calcSalary(){
        return $this->salary + ( $this->profit * .1);
    }

}
