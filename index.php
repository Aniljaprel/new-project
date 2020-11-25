<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Anil_contactapp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <herader>
    <h1>ANIL CONTACT APPLICATION</h1>
    </header>
    <center>
    <form action="adddata.php" method="post">
    <div class="main">
    <label for="">Name <input type="text" name="name" id="name" required>
    </label>
    <br><br>
    <label for="">Number<input type="number" name="contact" id="number" required></label>
    <br><br>
    <input type="submit" value="save">
    </div>
    
    </form>
    
    <br> <br>
    <hr>
    <table >
    <tr>
    <h2>LIST OF CONTACT</h2>
    <th>Name</th>
    <th>Phone No</th>
    <th>Actions</th>
    </tr>
    <?php   
    include 'db.php';
    $sql="SELECT *FROM names";
    $result=mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $phone=$row['phone'];
            ?>
            
            <tr>
            <td><?php echo $name?></td>
            <td><?php echo $phone?></td>
          <td>
           <a href="edit.php ?id=<?php echo $id ?>">Update</a>
           <a href="delete.php?id=<?php echo $id ?>">Delete</a>
          </td>

            </tr>
            <?php
        }
    }
    ?>

    
    </table>
    </center>
</body>
</html>