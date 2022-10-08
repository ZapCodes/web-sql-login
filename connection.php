<?php      
    $host = "192.168.0.37";  
    $user = "root";  
    $password = 'root';  
    $db_name = "phplogin";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  