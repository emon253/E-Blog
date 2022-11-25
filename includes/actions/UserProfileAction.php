<?php
    require_once ('/DB/htdocs/E-Blog/includes/helpers/db_con.php');
    // $id = $_SESSION['user']->user_id;

      


// update user 
    if (isset($_POST['btn_update']) == "Update") {


        $userId = $_POST['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];	

        $sql= "UPDATE users SET full_name='$name',phone='$phone' WHERE user_id='$userId'";    
        $executeQuery = mysqli_query($dbCon,$sql) or die("Error in Table Info Update: ".mysqli_error($dbCon));
        

        
    
        header("Location: /E-Blog/index.php?page=usr");
    }
?>    
