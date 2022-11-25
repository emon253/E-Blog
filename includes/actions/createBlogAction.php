<?php
session_start();


require_once ('../helpers/db_con.php');


if (isset($_POST['btn_post']) == "post") {
    $user = $_SESSION['user'];
    $title = $_POST['title'];
    $message = $_POST['msg'];
    

    $data = "'NULL','$user->user_id', '$title', '$message'";
    $insertSQL = "INSERT INTO posts VALUES($data)";
    $insertQuery = @mysqli_query($dbCon,$insertSQL) or die("Error in Table Info Insertion: ".mysqli_error($dbCon));
    header('location: /E-Blog/index.php?page=blogs');

}



?>