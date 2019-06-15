<?php
class Connection{
    public $conn;
    public function __construct(){
        $this->conn = new PDO('mysql:host=localhost;dbname=c8task','root','');
        //Check if connected
        /*if($this->conn){ echo "Connected"; }*/
    }
    
    public function insertData($name,$model,$price){
        try{
            $statement = $this->conn->prepare(
                "INSERT INTO car(name,model,price) VALUES (:name,:model,:price)"
            );

            $statement->execute(
                array(
                    ':name' => $name,
                    ':model' => $model,
                    ':price' => $price
                )
            );
            echo "Inserted<br>";
        }
        catch (Exception $e){
            echo "error: ".$e->getMessage();
        }
    }
    
    public function getAll($query) {
        $statement = $this->conn->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }
}
?>