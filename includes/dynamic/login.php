<?php include '../layout/header.php'; ?>

<div class="signup-form mt-5">
    <div class="form-head">
        <h2>Login</h2>
        <hr class="hr-line">
    </div>
    <form action="../actions/LoginAction.php" method="POST">
      <!-- error showing   -->
      <?php if (@$_SESSION['loginErrMsg'] != "")
        
        { ?>

        <div class="alert alert-warning" role="alert">
            <?php echo $_SESSION['loginErrMsg']; ?>
        </div>

        <?php  $_SESSION['loginErrMsg'] = ""; } ?>
      <!-- error showing   -->


        <div class="input-box2">
            <input type="email" placeholder="Email" name="email_field" required>
            <br> <input type="password" placeholder="Password" name="password_field" required>

        </div>

        <div class="input-box3">
            <input type="submit" value="Login" name="btn_login">

        </div>
        <span>New member? <a href="../dynamic/signup.php">Register</a> &nbsp; Here</span>



    </form>
</div>


<?php include '../layout/footer.php'; ?>