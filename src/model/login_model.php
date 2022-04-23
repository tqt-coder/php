<?php      
    $dbhost = "mysql_db";
    $dbuser = "root";
    $dbpass = "root";
    $db = "mysql";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
?>