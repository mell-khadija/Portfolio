<?php
include('connection.php');
include('check.php');

$id=$_POST['id'];
$query="SELECT * FROM portfolio WHERE id='$id'";

$queryrun=mysqli_query($conn,$query);
$data=mysqli_fetch_array($queryrun);

$target_dir = "../assets/img/portfolio/";

if(isset($_POST['pupdate'])){    
$projetpic=$_FILES['projetpic']['name'];        
if($projetpic==""){
    $projetpic=$data['projetpic'];
}else{
    $pdone = Upload('projetpic',$target_dir);
}
    
    
$projetnom=mysqli_real_escape_string($conn,$_POST['projetnom']);
$projetlien=mysqli_real_escape_string($conn,$_POST['projetlien']);
  
 
if($pdone=="error"){
    header("location:dashboard.php");
}else{
$query="UPDATE portfolio SET projetnom = '$projetnom', projetpic = '$projetpic', projetlien = '$projetlien' WHERE id='$id'";
echo $query;    
$queryrun=mysqli_query($conn,$query);
if($queryrun){
    header("location:edit-portfolio.php");
}    

}    
    
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM portfolio WHERE id='$id'";
    $queryrun=mysqli_query($conn,$query);
if($queryrun){
    header("location:dashboard.php");
}
}


if(isset($_POST['ajouter'])){    
$projetpic=$_FILES['projetpic']['name'];        
if($projetpic==""){
    $projetpic=$data['projetpic'];
}else{
    $pdone = Upload('projetpic',$target_dir);
}
    
    
$projetnom=mysqli_real_escape_string($conn,$_POST['projetnom']);
$projetlien=mysqli_real_escape_string($conn,$_POST['projetlien']);
  
 
if($pdone=="error"){
    header("location:dashboard.php");
}else{
$query="INSERT INTO portfolio (projetnom,projetpic,projetlien) VALUES ('$projetnom','$projetpic','$projetlien')";
$queryrun=mysqli_query($conn,$query);
if($queryrun){
    header("location:edit-portfolio.php");
}    

}    
    
}





