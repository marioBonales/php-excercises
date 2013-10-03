<?php
include("Calculator.php");
class CalculatorTest extends PHPUnit_Framework_TestCase{
    public function testAdd(){
        $number1 = 10;
        $number2 = 20;
        $this->assertEquals(Calculator::add($number1,$number2),$number1 + $number2);
    }

    public function testSubstract(){
        $number1 = 10;
        $number2 = 5;
        $this->assertequals(Calculator::substract($number1,$number2),$number1 - $number2);
    }

    public function testMultiply(){
        $number1 = 10;
        $number2 = 5;
        $this->assertequals(Calculator::multiply($number1,$number2),$number1 * $number2);
    }

    public function testDivide(){
        $number1 = 10;
        $number2 = 5;
        $this->assertequals(Calculator::divide($number1,$number2),$number1 / $number2);
    }
}
