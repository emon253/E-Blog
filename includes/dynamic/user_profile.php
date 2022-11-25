<?php require_once('./includes/actions/UserProfileAction.php');
$sql = "SELECT * FROM users WHERE user_id = '$user->user_id'";
$executeQuery = mysqli_query($dbCon,$sql);
$usr = mysqli_fetch_object($executeQuery);
$_SESSION['user'] = $usr;

?>
<div class="container  ">
    <div class="user-profile scroll-posts">
        <div class="profile-header ">
            <img src="images/user_img.png" alt="user">
            

            <div class="header-info">
                <h1><?= $usr->full_name ?></h1>
                <p>Email:
                    <?= $usr->email ?>
                </p>
                <p>Phone: 0<?= $usr->phone ?> </p>
            </div>

            <!-- Button trigger modal -->
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Edit Profile</a>



        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    </div>
                    <div class="modal-body">

                        <form action="includes/actions/UserProfileAction.php?usr=10" method="POST">
                            Name <input type="hidden" name="id" value="<?= $usr->user_id ?>">
                            Name <input type="text" name="name" value="<?= $usr->full_name ?>"><br><br>
                            Phone <input type="number" name="phone" value="<?= $usr->phone ?>"> <br> <br>
                            <input type="submit" name="btn_update" value="Update">

                        </form>
                    </div>

                </div>
            </div>
        </div>




        <!-- my posts section  -->


        <div class="row row-cols-1 row-cols-md-4 g-4 mt-2 ps-5 pe-5">
            <?php
            require_once('./includes/actions/GetBlogsAction.php');
            if ($number_of_posts > 0) {
                while ($post = mysqli_fetch_object($executeQuery)) {
                    if ($post->user_id == $_SESSION['user']->user_id) {
            ?>

                        <div class="col">
                            <div class="card">
                                <div class="card-body my-blog-text">
                                    <p class="card-title" style="font-weight: bold;"><?= $post->title ?></p>

                                    <div class="card-text "><?= $post->content ?></div>
                                </div>
                                <div class="card-footer text-center">
                                    <a class="ms-2" href="?page=edit&post=<?= $post->post_id ?>">Edit</a>
                                    <a class="ms-3" href="/E-Blog/includes/actions/DeleteBlogAction.php?p=<?= $post->post_id ?>">Delete</a>
                                    <a class="ms-3" href="?page=blog&p=<?= $post->post_id ?>">View</a>
                                </div>
                            </div>

                        </div>
            <?php }
                }
            }
            ?>
        </div>



        <!-- my posts section  -->
    </div>
</div>