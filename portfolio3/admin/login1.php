<?php 

include("connection.php");

if(isset($_POST['login'])){
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="SELECT * FROM `users` WHERE email='".$email."'AND Password='".$password."'";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        header('location:contact.php');
        echo 'valide';
    }
    else{
      header('location:../login/?msg=iuser');
      echo 'invalid';
        
    }
        
}
?>