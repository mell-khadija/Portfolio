<?php
include('connection.php');
$nom = $_POST['nom'];
$email = $_POST['email'];
$objet = $_POST['objet'];
$message = $_POST['message'];

$query="INSERT INTO contact (cnom,cemail,cobjet,cmessage) VALUES('$nom','$email','$objet','$message')";
$run = mysqli_query($conn,$query);
if($run){
    echo 'Your message has been sent. Thank you!';
}
?>
