<?php
include 'autoload.php';
//$car = new Car;
//$driver = new Driver;

/*$fun = function(){          //Variable Type Function
    echo 'I am Iron Man!<br>';
};
$fun();*/

//Youtube: Learn PHP: Callback
/*getUser('hi', function($result){
    echo $result;           //getting it from line 16
});
function getUser($name,$call_back){
    if(is_callable($call_back)){
        call_user_func($call_back,"<br>Hello!<br>"); //sending it to Line 11
    }
}*/

//Phaser
Car::greet();
//Download composer & Install. Then Shift+RightClick on the Folder to run command. in cmd right composer & enter
//In JSon File "autoload": {}  Object, "autoload": [] Data, "autoload": "" Value
//psr-4, because its the number 4 rule in http://php-fig.org/psr
?>