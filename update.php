<?php
    include('connect.php');

    if(isset($_POST['edit'])){
        $EdID = $_POST['edId'];
        $EdName = $_POST['edName'];
        $EdAge = $_POST['edAge'];
        $EdAddress = $_POST['edAddress'];

    }

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $update = "UPDATE `shai` SET name = '$name', age=$age, address='$address' WHERE id=$id";
        $sqlUp = mysqli_query($connect, $update);

        echo "<script>alert('Data Updated')</script>";
        echo "<script>window.location.href='index.php'</script>";

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udate Form</title>
    
    
</head>
<center>
<style>
    form{
    padding:8rem;
    
    }


<body>
    
    <a href="index.php"><- Back</a>
    <form action="update.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?= $EdName ?>"><br>

        <label for="age">AGE</label>
        <input type="number" name="age" id="age" value="<?= $EdAge ?>"><br>
        
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="<?= $EdAddress ?>"><br>

        <input type="hidden" name="id" id="id" value="<?= $EdID ?>">
        
        <input type="submit" name="submit" id="submit" value="Update"><br>
    </form>

</style>
</center>
</body>
</html>