<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
<form action="updateProcess.php" method="POST">
    <?php
    /**
     * Created by PhpStorm.
     * User: emobilis
     * Date: 2/13/19
     * Time: 9:40 AM
     */
    extract($_GET);
    $connection=mysqli_connect("localhost","root","","safari");
    $fetch=mysqli_query($connection,"SELECT * FROM students WHERE id=$y");
    if(!$fetch){
        echo"fetching failed";
    }
    else{
    $row=mysqli_fetch_assoc($fetch);
        extract($row);
    }



    ?>
    <input type="hidden" name="id" value="<?php echo $id; ?>"><br>
    <input type="name" name="name"value="<?php echo $names; ?>"><br>
    <input type="name" name="email" value="<?php echo $email; ?>"><br>
    <input type="password" name="password" value="<?php echo $password; ?>"><br>
    <input type="submit" name="submit" value="Update">



</form>


</body>
</html>