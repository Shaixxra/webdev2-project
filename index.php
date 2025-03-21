<?php
    include('connect.php');

    $select = "SELECT * FROM `shai`";
    $sqlSelect = mysqli_query($connect, $select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title style font-color: purple;>LAGAMSON_Project</title>
    <style>
        a{
            font-size: 26px;
            background-color: purple;
            color: white;
            text-decoration: none;
            margin-left:100px;
            justify-content: center;      
        
                        
            
        }
        
        table, th, td{
            border: 8px solid skyblue;
            font-size: 20px;
            font-family: Helvetica;
            background-color: pink;
        }
        button{
            font-size: 30px;
            cursor: pointer;
            color: blue;
            background: grey;
        }
        .btn{
            border: none;
            font-size: 30px;
            cursor: pointer;
            color: blue;
            background-color: grey;
        }
        .edit{
            background-color: blue;
            color: white;
        }
        .delete{
            background-color: grey;
            color: white;
        }
    </style>
</head>
<body>
    <center>
    <h2> LAGAMSON'S CRUD PROJECT </h2>
    </center>


    <a type="button" id="add" href="add.php">Add+</a>
    <center>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th colspan="2">Action</th>
        </tr>
    
        <?php foreach($sqlSelect as $result => $value) {  ?>
            <tr>
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['age'] ?></td>
                <td><?php echo $value['address'] ?></td>
                <td>
        </center>
                    <form action="update.php" method="post">
                        <input class="btn edit" type="submit" value="Edit" name="edit">
                        <input type="hidden" name="edId" value="<?= $value['id'] ?>">
                        <input type="hidden" name="edName" value="<?= $value['name'] ?>">
                        <input type="hidden" name="edAge" value="<?= $value['age'] ?>">
                        <input type="hidden" name="edAddress" value="<?= $value['address'] ?>">
                    </form>
                </td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="delID" value="<?= $value['id'] ?>">
                        <input class="btn delete" type="submit" value="Delete" name="delete">
                    </form>
                </td>
            </tr>
        </center>
        <?php } ?>
    </table>

</body>
</html>