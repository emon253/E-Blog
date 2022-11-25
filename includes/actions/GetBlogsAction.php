<?php
    require_once ('/DB/htdocs/E-Blog/includes/helpers/db_con.php');

    $sql = "SELECT * FROM posts ORDER BY post_id DESC";
    $executeQuery = mysqli_query($dbCon,$sql);
    $number_of_posts = mysqli_num_rows($executeQuery);

    if ( isset($_POST['btn_search']) == 'Search'){
   
        $key = $_POST['searchKey'];
        $sql = "SELECT * FROM posts WHERE title LIKE '%$key%'";
        $executeQuery = mysqli_query($dbCon,$sql);
        $number_of_posts = mysqli_num_rows($executeQuery);
    }
