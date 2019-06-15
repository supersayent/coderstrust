<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Class 04</title>
    </head>
    <body>
        <?php
        // Foot to Inch
        echo "<h1>Foot to Inch</h1>";
        function getInch($f){
            echo "<b>".$f."Feets = ".($f*12)."inch</b><br/>";
        }
        getInch(6);
        ?>
        
        <!--Form with GET method-->
        <h3>Form 01 with GET method</h3>
        <form action="form.php" method="GET">
            <input type="text" name="username"><br>
            <input type="submit" name="submit" value="GO">
        </form>
        
        <!--Form 02: Print 2 Names & Sum 2 numbers-->
        <h3>Form 02</h3>
        <form action="form.php" method="GET">
            <input type="text" name="name1"><br>
            <input type="text" name="name2"><br>
            <input type="text" name="no1"><br>
            <input type="text" name="no2"><br>
            <input type="submit" name="submit" value="GO">
        </form>
        
        <!--Form 03 with POST method-->
        <h3>Form 03 with POST method</h3>
        <form action="form.php" method="POST">
            <input type="text" name="name"><br>
            <input type="submit" name="submit" value="GO">
        </form>
        
        <!--Form 04 with POST method-->
        <h3>Form 04: Multiplication</h3>
        <form action="form.php" method="POST">
            <input type="text" name="no1"><br>
            <input type="text" name="no2"><br>
            <input type="submit" name="submit" value="GO">
        </form>
        
        <!--Form 05: Outputs show in same page-->
        <h3>Form 05: Outputs show in same page</h3>
        <form action="" method="GET">
            <input type="text" name="name"><br>
            <input type="submit" name="submit" value="GO">
        </form>
        <?php
        if(isset($_GET['name'])){
        //if(!empty($_GET['name'])){
            echo "<b>Welcome ".$_GET['name']."</b>";
        }
        ?>
        
        <!--Form 06: Password-->
        <h3>Form 06: Password</h3>
        <form action="" method="POST">
            <input type="password" name="pass"><br>
            <input type="password" name="pass_confirm"><br>
            <input type="submit" name="submit" value="GO">
        </form>
        <?php
        if(isset($_POST['submit'])){
            if($_POST['pass'] == $_POST['pass_confirm']){
                echo "Matched!";
            }
            else{
                echo "Wrong!!!!";
            }
        }
        ?>
        
        <!--Form 07: User & Password match-->
        <h3>Form 07: User & Password match</h3>
        <form action="form.php" method="POST">
            <input type="text" name="name"><br>
            <input type="password" name="pass"><br>
            <input type="submit" name="submit" value="GO">
        </form>
        
        
        <!--Form 08: 2 Strings matching-->
        <h3>Form 08: 2 Strings matching</h3>
        <form action="form.php" method="GET">
            <input type="text" name="name"><br>
            <input type="submit" name="submit" value="GO">
        </form>
        
        
        <!--Form 09: Form BackEnd Validation-->
        <?php
        if(isset($_POST['submit'])){
            if(!empty($_POST['name']) && !empty($_POST['fullname'])){
                echo "<b>Everything OK!</b>";
            }
            else{
                echo "<b>All Field Required...</b>";
            }
        }
        ?>
        <h3>Form 09: Form BackEnd Validation</h3>
        <form action="" method="POST">
            <input type="text" name="name"><br>
            <input type="text" name="fullname"><br>
            <input type="submit" name="submit" value="GO">
        </form>
        
        
        <!--Form 10: Form FrontEnd Validation with Required-->
        <h3>Form 10: Form FrontEnd Validation with Required</h3>
        <form action="" method="POST">
            <input type="text" name="name" required><br>
            <input type="text" name="fullname" required><br>
            <input type="submit" name="submit" value="GO">
        </form>
        <?php
        if(isset($_POST['submit'])){
            if(!empty($_POST['name']) && !empty($_POST['fullname'])){
                echo "<b>Everything OK!</b>";
            }
            else{
                echo "<b>All Field Required...</b>";
            }
        }
        ?>
        
        
        <!--Form 11: Upload File-->
        <h3>Form 11: Upload File</h3>
        <form action="" method="POST">
            <input type="file" name="file"><br>
            <input type="submit" name="submit" value="GO">
        </form>
        
        <!--For Form 12-14, Keep one & remove the rest to make it work.-->
        <!--Form 12: Upload File only Image-->
        <h3>Form 12: Upload File only Image</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" accept="image/jpeg,image/x-jpg"><br>
            <!--accept=image/png,image/gif-->
            <input type="submit" name="submit" value="GO">
        </form>
        <?php
        if(isset($_POST['submit'])){
            $tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($tmp, "photos/hi.jpg");
        }
        ?>
        
        
        <!--Form 13: Upload File only Image with exact imageName-->
        <h3>Form 13: Upload File only Image with exact imageName</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" accept="image/jpeg,image/x-jpg"><br>
            <!--accept=image/png,image/gif-->
            <input type="submit" name="submit" value="GO">
        </form>
        <?php
        if(isset($_POST['submit'])){
            $tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($tmp, "photos/".$_FILES['image']['name']);
        }
        ?>
        
        
        <!--Form 14: Upload File only Image with Unique Filename-->
        <h3>Form 14: Upload File only Image with Unique Filename</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" accept="image/jpeg,image/x-jpg"><br>
            <!--accept=image/png,image/gif-->
            <input type="submit" name="submit" value="GO">
        </form>
        <?php
        if(isset($_POST['submit'])){
            $tmp = $_FILES['image']['tmp_name'];
            //move_uploaded_file($tmp, "photos/". uniqid().$_FILES['image']['name']);
            $extension = ".".substr($_FILES['image']['type'],6);
            move_uploaded_file($tmp, "photos/". uniqid().$extension);
        }
        ?>
    </body>
</html>