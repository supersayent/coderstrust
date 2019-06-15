<?php
//Inheritance
/*include 'Car.php';
class Tata extends Car{
    public $model;
    public function universalCar() {
        echo "All Over Used<br>";
    }
    public function engineStart() {
        echo "Engine Started from Tata<br>";
        Car::engineStart();
    }
}


include 'Cars.php';
class Tata extends Cars{
    public $model = "GH";
    public function universalCar() {
        echo "All Over Used<br>";
    }
    public function engineStart() {
        echo "Engine Started from Tata<br>";
    }
}*/
//for interface
include 'Cars.php';
class Tata implements Cars{
    public function engineStart() {
        echo "Engine Started from Tata<br>";
    }
}
?>