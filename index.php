<?php

include './includes/layout/header.php';

@$page = $_GET['page'];

if($page == 'home'){
    require_once './includes/layout/home.php';
}else if($page == 'blogs'){
    require_once ('./includes/dynamic/blog.php');
}else if($page=='login'){
    require_once './includes/dynamic/login.php';
}else if($page=='signup'){
    require_once './includes/dynamic/signup.php';
}else{
    echo '<h2> 404 NOT FOUND</h2>';
}

include './includes/layout/footer.php'

?>