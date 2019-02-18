<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/12/19
 * Time: 10:58 AM
 */


if(isset($_GET['x'])){
    $connection=mysqli_connect("localhost","root","","safari");
    if(!$connection){
        echo"failed to connect to the database";
    }
    extract($_GET);
    mysqli_query($connection,"DELETE FROM students WHERE id=$x");
    header("location:viewUsers.php");
}
?>