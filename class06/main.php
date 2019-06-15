<?php
//include 'Car.php';
/*$bmw = new Car();
echo "Color is: ".$bmw->color."<br>";
$toyota = new Car();
$toyota->showName("Premio");
$toyota->showModel("Premio","897897");
$toyota = new Car(); */
//$toyota = new Car("abc123");
//echo $toyota->token."<br>";
//$toyota->be();
//For Protected
//echo $toyota->hello."<br>";
//For Private
/*$toyota = new Car();
$toyota->setData("user","123");
$toyota->getData();*/
//Static, Facad
/*echo Car::$name."<br>";
echo Car::getName()."<br>";
Car::printName("ABC","abc");*/


//include 'Name.php';
/*$greet = new Name();
echo "Welcome, ".$greet->name."<br>";
$wlc = new Name();
$wlc->greet("Sammy");
$name = "Mohammad Samiul Haque Samiu";
$wlc->greetName($name);
$wlc = new Name();*/
/*$name = new Name("Mohammad Samiul Haque ","Sammy");
echo $name->fname.$name->lname."<br>";*/
//For Private
/*$name = new Name();*/
// Set & Get Method
/* $name->setName("Mohammad Samiul Haque ","Sammy");
$name->getName();*/
//Single Method
/*$name->printName("Mohammad Samiul Haque ","Sammy");*/


include 'Tata.php';
//Inheritance
$car = new Car();
$car->engineStart();
$tata = new Tata();
echo $tata->size."<br>";
$tata->engineStart();
$tata->universalCar();
//Abstract
/*$tata = new Tata();
echo $tata->model."<br>";*/
?>