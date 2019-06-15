<?php
//Create PDO/Connection
/*$pdo = new PDO("mysql:host=localhost;dbname=ctg219-oop","root","");
if($pdo){
    echo "Connected";
}*/

class Connection{
    public $conn;
    public function __construct(){
        $this->conn = new PDO('mysql:host=localhost;dbname=ctg219-oop','root','');
        //Check if connected
        /*if($this->conn){
            echo "Connected";
        }*/
    }
    
    public function insertAvenger($name,$power,$is_dead){
        try{
            $statement = $this->conn->prepare(
                "INSERT INTO avenger(name,power,is_dead) VALUES (:name,:power,:is_dead)"
            );

            $statement->execute(
                array(
                    ':name' => $name,
                    ':power' => $power,
                    ':is_dead' => $is_dead
                )
            );
            echo "Inserted";
            
        }
        catch (Exception $e) {
            echo "error: ".$e->getMessage();
        }
    }
    /*public function deleteAvenger($name){
        try{
            $statement = $this->conn->prepare(
                "DELETE from avenger where name = :name"
            );
            $statement->execute(array(':name' => $name));
            echo "Deleted";
        }
        catch (Exception $e) {
            echo "error: ".$e->getMessage();
        }
    }*/
}
?>