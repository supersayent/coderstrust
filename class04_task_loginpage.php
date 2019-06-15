<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Class 04 - Login Form</title>
    </head>
    <body>
        <!--Login Form-->
        <h3>Login Form</h3>
        <form action="" method="POST">
            <input type="text" name="name" required><br>
            <input type="password" name="pass" required><br>
            <input type="submit" name="submit" value="GO">
        </form>
        <?php
        if(isset($_POST['submit'])){
            if(!empty($_POST['name']) && !empty($_POST['pass'])){
                if(strlen($_POST['pass'])<6){
                    echo "<b>Password Length has to be more than 6...</b>";
                }
                else{
                    echo "<b>Everything OK!</b>";
                }
            }
            else{
                echo "<b>All Field Required...</b>";
            }
        }
        
        ?>
    </body>
</html>
