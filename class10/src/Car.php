<?php
namespace App;

class Car{
    public function __construct() {
        echo "I am from Car.php<br>";
        $fun = function(){          //Variable Type Function
            echo 'I am Fun from Car.php!<br>';
        };
        $fun();
    }
    public static function greet(){
        echo "Greeting from Car.php<br>";
    }
}
?>