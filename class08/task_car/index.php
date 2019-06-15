<?php
/*Using Form*/
include 'Connection.php';
$conn = new Connection;
$result = $conn->getAll("SELECT * FROM car");
/*$conn->insertData("Mercedes-Benz","S-Class","800000");
$conn->insertData("BMW","7-Series","780000");
$conn->insertData("Porsche","Panamera","750000");
$conn->insertData("Chevrolet","Corvette","680000");
$conn->insertData("Lexus","LC","670000");
$conn->insertData("Porsche","911","660000");
$conn->insertData("Audi","A5","650000");
$conn->insertData("Tesla","S","750000");
$conn->insertData("Tesla","3","700000");
$conn->insertData("Acura","NSX","610000");*/
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $conn->insertData($name,$model,$price);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Collection</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name"><br>
        <input type="text" name="model"><br>
        <input type="text" name="price"><br>
        <input type="submit" name="submit" value="Insert"><br>
    </form>
    <hr><hr>
    <table border="1" align="center">
        <tr align="center">
            <td><b>ID</b></td>
            <td><b>Name</b></td>
            <td><b>Model</b></td>
            <td><b>Price</b></td>
        </tr>
        <?php
            foreach ($result as $res){
        ?>
        <tr align="center">
            <td><?php echo $res['id']; ?></td>
            <td><?php echo $res['name']; ?></td>
            <td><?php echo $res['model']; ?></td>
            <td><?php echo $res['price']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>