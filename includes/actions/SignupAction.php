<?php
session_start();
require_once ('../helpers/db_con.php');

if (isset($_POST['btn_submit']) == "Submit") {

    $fullName = $_POST['name_field'];	
    $phone = $_POST['num_field'];	
    $email = $_POST['email_field'];	
    $password = $_POST['password_field'];	

    $data = "'NULL', '$fullName', '$phone', '$email', '$password'";
    $insertSQL = "INSERT INTO users VALUES($data)";
    $insertQuery = @mysqli_query($dbCon,$insertSQL) or die("Error in Table Info Insertion: ".mysqli_error($dbCon));
    if($insertQuery){
		$_SESSION['userName'] = "$fullName";
	}
}
header('location: /E-Blog')

?>