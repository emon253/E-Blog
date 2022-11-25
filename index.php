<?php

include './includes/layout/header.php';

@$page = $_GET['page'];

if($page == ''){
    require_once './includes/layout/home.php';
}else if($page == 'blogs'){
    require_once ('./includes/dynamic/blog.php');
}else if($page=='login'){
    require_once './includes/dynamic/login.php';
}else if($page=='signup'){
    require_once './includes/dynamic/signup.php';
}else if($page=='usr'){
    require_once './includes/dynamic/user_profile.php';
}else if($page=='blog'){
    require_once './includes/dynamic/blog_view.php';
}
else if($page=='edit'){
    require_once './includes/dynamic/update_blog.php';
}else if($page=='about'){
    require_once './includes/dynamic/aboutUs.php';
}else{
    echo '<h2> 404 NOT FOUND</h2>';
}

include './includes/layout/footer.php'

?>