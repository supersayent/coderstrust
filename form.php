<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form.php</title>
    </head>
    <body>
        <?php
        //$_GET is associate array data type. var_dump($_GET);
        //Form 1: echo "<b>Welcome ".$_GET['username']."</b>";
        /*Form 2:
        echo "Welcome <b>".$_GET['name1']."</b> & <b>".$_GET['name2']."</b><br/>";
        function getSum($n1,$n2){
            echo "<b>Sum is: </b>".($n1+$n2);
        }
        getSum($_GET['no1'], $_GET['no2']);*/
        
        //$_POST is associate array data type. var_dump($_POST);
        //Form 3: echo "<b>Welcome ".$_GET['username']."</b>";
        /*Form 4
        function getMulty($n1,$n2){
            echo "<b>Multiplication is: </b>".($n1*$n2);
        }
        getMulty($_POST['no1'], $_POST['no2']);*/
        
        /*Form 7
         * $name="Name01";
        $pass="a1";
        if(isset($_POST['submit'])){
            if($name == $_POST['name'] && $pass == $_POST['pass']){
                echo "<b>Login Successful!</b>";
            }
            else{
                echo "Login Failed!!!! Wrong Username/Password...";
            }
        }*/
        
        /*Form 8
        $name=array("Coders","Trust","Training");
        $a=count($name);
        if(isset($_GET['submit'])){
            for($i=0;$i<$a;$i++){
                if($name[$i] == $_GET['name']){
                    echo "<b>Matched!</b>";
                    break;
                }
                if($i==$a-1){
                    if($name[$i] != $_GET['name']){
                    echo "<b>Not Matched!</b>";
                    }
                }
            }
        }*/
        
        /*Form 8 (alt)
        $name=array("Coders","Trust","Training");
        $check=0;
        if(isset($_GET['submit'])){
            foreach($name as $n){
                if($n == $_GET['name']){
                    $check=1;
                    break;
                }
                else{
                    $check=0;
                }
            }
            if($check == 1){
                echo "Matched!";
            }
            else{
                echo "Not Matched!";
            }
        }*/
        
        /**/
        
        ?>
    </body>
</html>
