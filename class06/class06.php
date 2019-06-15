<!DOCTYPE html>
<!-- -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Class 06</title>
    </head>
    <body>
        <!--OOP, incapsulation-->
        <?php
        $name = "Mohammad Samiul Haque Samiu";
        class Greetings{
            public function greet($a){
                echo "Welcome, ".$a;
            }
        }
        $greet = new Greetings();
        $greet->greet($name);
        ?>
    </body>
</html>
