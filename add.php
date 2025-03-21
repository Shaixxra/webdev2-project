<?php
    include('connect.php');


    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $insert = "INSERT INTO `shai` VALUES (NULL,'$name', $age, '$address')";
        $insertSQL = mysqli_query($connect, $insert);

        echo "<script>alert('Data Added')</script>";
        echo "<script>window.location.href='index.php'</script>";

    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <style> 
    
        form{
            margin-right: 150px;
            margin-left: 50px;
            padding: 8rem;
        }
    </style> 
</head>
<body>

    <a href="index.php"><- Back</a>
    <form action="add.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name"><br>

        <label for="age">AGE</label>
        <input type="number" name="age" id="age"><br>
        
        <label for="address">Address</label>
        <input type="text" name="address" id="address"><br>
        
        <input type="submit" name="submit" id="submit"><br>
    </form>
    
</body>
</html>