<?php

session_start();
require_once ('../helpers/db_con.php');

if (isset($_POST['btn_login']) == "Login") {

    $email = $_POST['email_field'];	
    $password = $_POST['password_field'];	

    $sql = "SELECT * FROM users WHERE email = '$email'";
    
    $executeQuery = mysqli_query($dbCon,$sql);
	$user = mysqli_fetch_object($executeQuery);
    if($user->password === $password){
        $_SESSION['user'] = $user;
        header('location: /E-Blog');
    }else{
        $_SESSION['loginMsg'] = "Invlaid email or password";
        header('location: /E-Blog/index.php?page=login');
    }

   
}
?>