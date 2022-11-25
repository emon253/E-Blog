 <?php
    require_once './includes/actions/UpdateBlogAction.php';

    ?>


 <div class="container">
     <div class="ms-5 me-5 ps-5 pe-5">
         <h5 class="modal-title text-center p-1" id="exampleModalLabel">Update Blog</h5>

         <!-- msg showing   -->
         <?php if (@$_SESSION['msg'] != "") { ?>

             <div class="alert alert-warning" role="alert">
                 <?= $_SESSION['msg']; ?>
             </div>

         <?php $_SESSION['msg'] = "8";
            } ?>
         <!-- msg showing   -->
         <form action="includes/actions/UpdateBlogAction.php" method="POST">
             <input name="post_id" value="<?= $post->post_id; ?>" type="hidden">
             <div class="mb-3">
                 Edit title:
                 <input type="text" value="<?= $post->title; ?>" class="form-control" name="title">
             </div>
             <div class="mb-3">
                 Edit Your Blog:
                 <textarea name="content" rows="10" cols="55" class="form-control"><?= $post->content; ?> </textarea>
             </div>

             <div class="modal-footer">
                 <input type="submit" value="Update" name="btn_update" class="btn btn-primary">
             </div>
         </form>
     </div>

 </div>