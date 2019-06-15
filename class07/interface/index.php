<?php
include 'MyStatus.php';
$sts = new MyStatus();
$sts->lowMoney();
echo"<br>";
$sts->homeless();
echo"<br>";
$sts->noFood();
?>