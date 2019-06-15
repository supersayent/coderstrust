<!DOCTYPE html>
<!-- -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Class 05</title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Input Anything">
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
        if(isset($_POST['submit'])){
            if(empty($_POST['username'])){
                echo "<p style='color:red'>Field must not be Empty!";
            }
            else if(strlen($_POST['username'])<5 || strlen($_POST['username'])>10){
                echo "<p style='color:red'>Length must be more than 4 or less than 10 character.";
            }
            else{
                echo "Welcome ".$_POST['username'];
            }
        }
        ?>
    </body>
</html>
