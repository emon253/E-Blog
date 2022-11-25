<?php
require_once ("../helpers/db_con.php");


/*DELETE*/
$postId = $_GET['p'];

$sql = "DELETE FROM posts WHERE post_id='$postId'";

mysqli_query($dbCon,$sql);
header("Location: /E-Blog/index.php?page=usr");

?>