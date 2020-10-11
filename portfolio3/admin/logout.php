<?php
session_start();
include('connection.php');

if(isset($_POST['logout']))
{
    session_destroy();
    unset($_SESSION['login1']);
    header('Location: admin/page.php');
}

?>