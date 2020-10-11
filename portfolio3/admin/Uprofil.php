<?php
session_start();
include('connection.php');

if(isset($_POST['uprofile'])){    
$name=mysqli_real_escape_string($conn,$_POST['user_name']);
$email=mysqli_real_escape_string($conn,$_POST['userid']);
$password=mysqli_real_escape_string($conn,$_POST['userpass']);

$query= "UPDATE users SET `user_name`='$name',`email`='$email' ,`password`= '$password' WHERE 1 ";

$query_run=mysqli_query($conn,$query);
if($query_run){
    $_SESSION['user_name']=$name;
    header("location:edit-profil.php");
}    

}    
    ?>


