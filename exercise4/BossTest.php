<?php
define("NAME","Mario");
define("NET_PROFIT",200000);
define("SALARY",30000);
include("Boss.php");
class BossTest extends PHPUnit_Framework_TestCase{
    public function setUp(){
        $boss = new Boss(NAME,SALARY);
        $boss->setProfit(NET_PROFIT);
    }

    public function testCalcSalary(){
        $name = NAME;
        $salary = SALARY + ( 10 * NET_PROFIT / 100 );
        $this->expectOutputString("Name: {$name} - Salary {$salary}");
    }


}
