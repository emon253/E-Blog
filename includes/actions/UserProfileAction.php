<?php




function getUserById(){
    require_once ('./includes/helpers/db_con.php');
    //$userId = $_GET['usr'];
    $userId = 8;
    $sql = "SELECT * FROM users WHERE user_id = $userId";
    $executeQuery = mysqli_query($dbCon,$sql);
    $user = mysqli_fetch_object($executeQuery);
    return $user;
}
?>