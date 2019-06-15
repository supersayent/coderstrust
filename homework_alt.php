<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Class 3</title>
    </head>
    <body>
    <?php
        $string = "We are coders go to hell";
        $arr = explode(' ', $string);
        $shortest_array = array();
        
        $length = array_map('strlen', $arr);
        $length = min($length);
        
        for($i=0; $i<count($arr); $i++){
            if(strlen($arr[$i]) == $length){
                array_push($shortest_array, $arr[$i]);
            }
        }
        //print_r($shortest_array);
        echo implode(' ', $shortest_array);
    ?>
    </body>
</html>