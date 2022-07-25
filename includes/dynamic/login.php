

<div class="signup-form mt-5">
    <div class="form-head">
        <h2>Login</h2>
        <hr class="hr-line">
    </div>
    <form action="includes/actions/LoginAction.php" method="POST">
      <!-- error showing   -->
      <?php if (@$_SESSION['loginMsg'] != "")
        
        { ?>

        <div class="alert alert-warning" role="alert">
            <?php echo $_SESSION['loginMsg']; ?>
        </div>

        <?php  $_SESSION['loginMsg'] = ""; } ?>
      <!-- error showing   -->


        <div class="input-box2">
            <input type="email" placeholder="Email" name="email_field" required>
            <br> <input type="password" placeholder="Password" name="password_field" required>

        </div>

        <div class="input-box3">
            <input type="submit" value="Login" name="btn_login">

        </div>
        <span>New member? <a href="?page=signup">Register</a> &nbsp; Here</span>



    </form>
</div>


