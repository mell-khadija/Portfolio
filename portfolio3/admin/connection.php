<?php      
        $host = "localhost";  
        $user = "root";  
        $password = '';  
        $db_name = "portfolio";  
          // Create connection
        $conn = mysqli_connect($host, $user, $password, $db_name);  
        // Check connection
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
?>