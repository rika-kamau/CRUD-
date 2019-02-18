<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/13/19
 * Time: 9:44 AM
 */
if(isset($_POST['id'])){
    extract($_POST);
    $connection=mysqli_connect("localhost","root","","safari");
    $update=mysqli_query($connection,"UPDATE `students` SET `names`='$name',`email`='$email',`password`='$password' WHERE id=$id");
    header("location:viewUsers.php");
}


?>