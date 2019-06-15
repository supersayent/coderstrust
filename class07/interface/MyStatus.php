<?php
include 'Gorib.php';
class MyStatus implements Gorib{
    public function lowMoney(){
        echo "Low on Money. ";
    }
    public function homeless(){
        echo "Totally Homeless. ";
    }
    public function noFood(){
        echo "Na kheye more gelam!";
    }
}
?>