<?php 
require_once ('/DB/htdocs/E-Blog/includes/helpers/db_con.php');

if(isset($_GET['post'])){
    $postId = $_GET['post'];
    $sql = "SELECT * FROM posts WHERE post_id = $postId";
    $executeQuery = mysqli_query($dbCon,$sql);
    $post = mysqli_fetch_object($executeQuery);
}
if (isset($_POST['btn_update']) == "Update") {
    $postId = $_POST['post_id'];	
	$title = $_POST['title'];	
	$content = $_POST['content'];	
	
	/*Update into tbl_info*/
	$sql= "UPDATE posts SET title='$title',content='$content' WHERE post_id='$postId'";
    echo $sql;
	$executeQuery = mysqli_query($dbCon,$sql) or die("Error in Table Info Update: ".mysqli_error($dbCon));
	/*Success or Error Message*/
	if($executeQuery){
		$_SESSION['msg'] = "Update Success!";
	}
	header("Location: /E-Blog/index.php?page=edit&post=$postId");
}


?>