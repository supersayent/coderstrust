<?php
include 'Connection.php';
$conn = new Connection;
$getId = $_GET['id'];
$res = $conn->getAll("SELECT * FROM car WHERE id=$getId",NULL);
//print_r($res);

//UPDATE Method
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $data = array(
        ':name' => $name,
        ':model' => $model,
        ':price' => $price
    );
    $conn->update("UPDATE car SET name=:name,model=:model,price=:price WHERE id=$getId",$data);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>edit.php</title>
</head>
<body>
    <form action="" method="POST">
        <?php
            foreach($res as $r){
        ?>
        <input type="text" name="name" value="<?php echo $r['name']; ?>"><br>
        <input type="text" name="model" value="<?php echo $r['model']; ?>"><br>
        <input type="text" name="price" value="<?php echo $r['price']; ?>"><br>
        <input type="submit" name="submit" value="Update"><br>
        <?php
            }
        ?>
    </form>
</body>
</html>