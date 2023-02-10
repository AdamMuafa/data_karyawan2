<?php
include('connection.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($db,"SELECT * FROM users WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($query)==1){
        header("Location: ../dashboard.php");

    }
    else if($username == '' || $password == ''){
        header("Location: ../login.php?error=2");

    }
    else{
        header("Location: ../login.php?error=1");
    }
?>
