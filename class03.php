<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Class 3</title>
    </head>
    <body>
        <h1>Condition</h1>
    <?php
        $i=1;
        $j='1';
        // check double equal & triple equal
        if($i==$j){
            echo "match!";
        }
        else{
            echo "does not match!";
        }
        echo "<br>";
    ?>

    <?php
        $i=11;
        $j=11;
        // check double equal & triple equal
        if($i==11){
            echo "match!";
        }
        if($j==11){
            echo "again match!";
        }
        echo "<br>";
    ?>

    <?php
    // max between two numbers
        $i=11;
        $j=20;
        if($i>$j){
            echo $i;
        }
        else{
            echo $j;
        }
        echo "<br>";
    ?>

    <?php
    // max among three numbers
        $i=110;
        $j=20;
        $k=25;
        if($i>$j && $i>$k){
            echo $i;
        }
        else if($i<$j && $j<$k){
            echo $j;
        }
        else{
            echo $k;
        }
        echo "<br>";
    ?>
        
        <h1>Function</h1>
    <?php
        //Function
        $str = "CodersTrust";
        function getLength($str){
            echo $str." length: ";
            $result = strlen($str);
            return $result;
        }
        echo getLength($str);
        echo "<br>";
    ?>

    <?php
        //Function -> String Odd/Even
        $x = "CodersTrust";
        function getLen($x){
            $a = strlen($x);
            if($a%2==0){
                echo $x." is Even.";
            }
            else{
                echo $x." is Odd.";
            }
        }
        getLen($x);
        echo "<br>";
    ?>
        
    <?php
        //Function -> String Odd/Even (Alt)
        $x = "CodersTrust";
        $res = getLent($x);
        if($res == true){
            echo "Even";
        }
        else{
            echo "Odd";
        }
        function getLent($x){
            $a = strlen($x);
            if($a%2==0){
                return true;
            }
            else{
                return false;
            }
        }
        echo "<br>";
    ?>
        
    <?php
        //Function -> Name
        $str = "Sami";
        function getGret($str){
            echo "Welcome: ".$str;
        }
        getGret($str);
        echo "<br>";
    ?>
    
    <?php
        //Function -> Sum & Sub
        $a = 15;
        $b = 35;
        function getSum($a,$b){
            return $a+$b;
        }
        echo getSum($a,$b);
        function getSub($a,$b){
            echo " ".($b-$a);
        }
        getSub($a,$b);
        echo "<br>";
    ?>
        
        <h1>Loop</h1>
    <?php
        echo "<b>For Loop: </b>";
        for($i=0; $i<10; $i++){
            echo $i." ";
        }
        echo "<br>";
        // for(;1;) - loop won't stop.
    ?>
        
    <?php
        $i=5;
        echo "<b>While Loop: </b>";
        while($i>0){
            echo $i." ";
            $i--;
        }
        echo "<br>";
        // while(1) or while(true) - loop won't stop.
    ?>
        
    <?php
        //Times Table
        $a = 5;
        echo "<b>".$a."-Times Table: "."</b>"."<br>";
        for($i=1; $i<=10; $i++){
            echo $a." X $i times table = ".($a*$i)."<br>";
        }
    ?>
        
    <?php
        //Print Number Reverse Order
        echo "<b>Reverse Order: </b>";
        for($i=20; $i>9; $i--){
            echo $i." ";
        }
        echo "<br>";
    ?>
        
    <?php
        $i=2;
        echo "<b>Do Loop: </b>";
        do{
            echo $i." ";
        }
        while($i == 10);
        echo "<br>";
    ?>
    
    <?php
        //Nested 'For' Loop: Times Table for 10-20
        for($i=10; $i<=20; $i++){
            echo "<b>".$i."-Times Table: "."</b>"."<br>";
            for($j=1; $j<=10; $j++){
                echo $i." X $j times table = ".($i*$j)."<br>";
            }
        }
    ?>
    
    <?php
        //sum 12 to 25
        $sum=0;
        for($j=12; $j<=25; $j++){
            $sum=$sum+$j;
        }
        echo "<b>Sum of 12 to 25 : </b>".$sum."<br>";
    ?>
        
        <h1>Recursion</h1>
    <?php
        //1 time print
        /*function rec(){
            echo "Windows is Shutting down!! ...<br>";
            exit();
            rec();
        }
        rec();*/
    ?>
        
    <?php
        //Print 10 time
        /*function recurr($value){
            echo "Windows is Shutting down!! ... $value<br>";
            if($value==0){
                exit();
            }
            $value--;
            recurr($value);
        }
        recurr(10);*/
    ?>
        
    <?php
        //Sum: 12 to 25
        /*echo "<b>Sum of 12 to 25 : </b>";
        function sum2($sum,$value){
            $sum=$sum+$value;
            if($value<=13){
                echo $sum;
                exit();
            }
            $value--;
            sum2($sum,$value);
        }
        sum2(12,25);*/
    ?>
        
    <?php
        //Sum: 12 to 25 (Alt)
        echo "<b>Sum of 12 to 25 : (Alt) </b>";
        function sum3($sum,$value){
            $sum=$sum+$value;
            if($value>24){
                echo $sum;
                exit();
            }
            $value++;
            sum3($sum,$value);
        }
        sum3(12,13);
    ?>
    </body>
</html>