<?php
require_once('/DB/htdocs/E-Blog/includes/helpers/db_con.php');
$id =  $_GET['p'];
$sql = "SELECT * FROM posts WHERE post_id = $id";
$executeQuery = mysqli_query($dbCon, $sql);
$post = mysqli_fetch_object($executeQuery);

?>
<div class="container">
    <div style="height: 90vh;" class="blog-container scroll-posts">
        <h3> <?=$post->title?></h3>
        <p>
            <?=$post->content?>

        </p>
    </div>
</div>