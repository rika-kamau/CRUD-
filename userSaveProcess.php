<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/12/19
 * Time: 9:48 AM
 */
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $encrPassword=md5($password);
    $connection=mysqli_connect("localhost","root","","safari");
    if(!$connection){
        echo"connection failed!";
    }
    $insert=mysqli_query($connection,"INSERT INTO `students`(`id`, `names`, `email`, `password`) VALUES (null,'$name','$email','$encrPassword')");
    if(!$insert){
        echo"failed to save";
    }
    else{
        echo"saved succesfully";
        echo"<a href='userSave.php'>Add User</a>";
    }
}




?>