<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<a href="userSave.php">Add Users</a>
<table class="table table-dark">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Delete</th>
        <th>Update</th>
        <?php
        /**
         * Created by PhpStorm.
         * User: emobilis
         * Date: 2/12/19
         * Time: 10:32 AM
         */
        $connection=mysqli_connect("localhost","root","","safari");
        if(!$connection){
            echo"database access failed";

        }
        else{
            $fetch=mysqli_query($connection,"SELECT * FROM students");
            if(!$fetch){
                echo"fetching failed";
            }
            else{
                while($row=mysqli_fetch_assoc($fetch)){
                    extract($row);
                    echo"
                    <tr>
                  <td>$names</td>
                  <td>$email</td>
                  <td><a href='delete.php?x=$id' class='btn btn-danger'>Delete</a></td>
                  <td><a href='update.php?y=$id' class='btn btn-info'>Update</a></td>
                    </tr>
                    
                    ";
                }
            }
        }



        ?>

    </tr>


</table>

</body>
</html>