<?php
include("Car.php");
define("MAKE", "Ford");
define("MODEL","Mustang");
class CarTest extends PHPUnit_Framework_TestCase{
    public function testCarMake(){
        $car = new Car(MAKE,MODEL);
        $this->assertEquals($car->make,MAKE);
        $this->assertEquals($car->model,MODEL);
    }
}
