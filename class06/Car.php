<?php
class Car {
    /*public $color = "Green";
    public $model;
    public function showName($name) {
        echo "Your Car Name: ".$name."<br>";
    }
    public function showModel($name,$mod) {
        $this->model = $mod;
        echo "Your Car Name: ".$name." | Model: ".$this->model."<br>";
    }*/
    
    //public $token;
    //protected $token;
    //public $hello = "hi hi";
    /*public function __construct(){
        echo "I am a Constructor"."<br>";
        $this->token = sha1('13');
    }*/
    
    /*public function __construct($tok){
        $this->token = $tok;
    }*/
    /*public function ae() {
        echo "I am from ae"."<br>";
    }
    public function be() {
        $this->ae();
    }*/
    /*public function __destruct() {
        echo "I am dead";
    }*/
    
    /*private $password, $username;
    public function setData($username,$password) {
        $this->username = $username;
        $this->password = $password;
    }
    public function getData() {
        echo "$this->username".", "."$this->password"."<br>";
    }*/
    
    /*public static $name = "John";
    public static function getName() {
        echo self::$name;
    }
    public static $name1, $name2;
    public static function printName($n1,$n2) {
        self::$name1=$n1;
        self::$name2=$n2;
        echo self::$name1.", ".self::$name2."<br>";
    }*/
    
    //Inheritance
    public $price;
    public $size = "Long";
    public function engineStart() {
        echo "Engine Started<br>";
    }
}
?>