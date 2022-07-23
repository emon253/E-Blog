
<?php include '../layout/header.php';?>

<div class="signup-form mt-5">
    <div class="form-head">
        <h2 >Login</h2>
        <hr class="hr-line">
    </div>
    <form action="./pages/action_pages/SignupAction.php" method="POST">
        
        <div class="input-box2">
            <input type="email" placeholder="Email" name="email_field" required>
            <br> <input type="password" placeholder="Password" name="password_field" required>

        </div>

        <div class="input-box3">
            <input type="submit" value="Login" name="btn_submit">

        </div>
        <span>New member? <a href="../dynamic/signup.php">Register</a> &nbsp; Here</span>



    </form>
</div>


<?php include '../layout/footer.php';?>
