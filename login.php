<?php

    include('connect.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  

    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  

    $sql = "select * from user where username = '$username' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
        
    if($count == 1){  
        session_start();
        $_SESSION["username"] = $username;
        header("Location: ./index.php");
        exit;  
    }  
    else{  
    echo '<script type="text/javascript">
            window.onload = function () { alert("Incorrect Username or Password"); } 
        </script>';
    } 

?>  