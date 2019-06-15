<?php
class Name{
    /*public $name;
    public function greet($a){
        echo "Hello from the other side, ".$a."<br>";
    }
    public function greetName($name){
        $this->name = $name;
        echo "Hello from the other side, ".$name."<br>";
    }*/
    
    /*public $fname, $lname;
    public function __construct() {
        $this->fname = "Mohammad Samiul Haque ";
        $this->lname = "Sammy";
    }
    public function __construct($name1,$name2) {
        $this->fname = $name1;
        $this->lname = $name2;
    }*/
    
    private $fname, $lname;
    // Set & Get Method
     /* public function setName($n1,$n2) {
        $this->fname = $n1;
        $this->lname = $n2;
    }
    public function getName() {
        echo "$this->fname"."$this->lname"."<br>";
    }*/
    // Single Method
    public function printName($n1,$n2) {
        $this->fname = $n1;
        $this->lname = $n2;
        echo "$this->fname"."$this->lname"."<br>";
    }
}
?>