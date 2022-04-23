<?php      
    include('../model/login_model.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        // $username = stripcslashes($username);  
        // $password = stripcslashes($password);  
        // $username = mysqli_real_escape_string($con, $username);  
        // $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username ' and password = '$password'" ;
        

        $result = $conn->query($sql);
        if( $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo $row["username"]. " " . $row["password"]. "<br>";
            }
        }
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     


		
?>  