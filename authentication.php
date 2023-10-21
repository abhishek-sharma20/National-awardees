<?php      
    include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from first where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        if (!$result) {
            printf("Error: %s\n", mysqli_error($con));
            exit();
        }else
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('Location:homepage.html');
  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     


?>  
