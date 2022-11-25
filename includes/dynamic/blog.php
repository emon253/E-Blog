<div class="container ">

    <div class="posts scroll-posts p-3" style="height: 500px;">

        <!-- create blog section -->

        <?php
        if (@$_SESSION['user'] != "") {

        ?>

            <div class="card cs3">
                <div class="card-body text">


                    <input value="What's in your mind?" data-bs-target="#exampleModal" type="button" data-bs-toggle="modal" data-bs-whatever="@mdo" class="form-control me-2 " data-bs-whatever="@mdo">


                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create Blog</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="includes/actions/CreateBlogAction.php" method="POST">

                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Title:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="title" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea name="msg" rows="10" cols="50" class="form-control" id="message-text" placeholder="What's in your mind?" required></textarea>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <input type="submit" value="post" name="btn_post" class="btn btn-primary">
                                        </div>


                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        <?php } ?>

        <!-- create blog section ends -->



        <!-- show all blogs -->
        <?php
        require_once('./includes/actions/GetBlogsAction.php');
        require_once('./includes/actions/UserProfileAction.php');
        if ($number_of_posts > 0) {
            while ($post = mysqli_fetch_object($executeQuery)) {

        ?>

                <div class="card cs2">
                    <div class="card-body text">
                        <h5 class="card-title"><?= 'User : ' . $post->user_id ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $post->title ?></h6>
                        <div class="card-text "> <?= $post->content ?></div>
                    </div>
                    <a href="?page=blog&p=<?= $post->post_id ?>" class="card-link " style="margin-left:auto">Show more</a>

                </div>
        <?php 
        }}else{
            echo "<h2 class='text-center'> No posts found</h2>";

        }
        ?>

    </div>


</div>