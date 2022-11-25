<div class="signup-form mt-5">
    <div class="form-head">
        <h2>Register</h2>
        <hr class="hr-line">
    </div>
    <form action="includes/actions/SignupAction.php" method="POST">
        <div class="inputBox1">
            <input type="text" placeholder="Full Name" name="name_field" required> <input type="tel" placeholder="Mobile Number" name="num_field" required>

        </div>

        <div class="input-box2">
            <input type="email" placeholder="Email" name="email_field" required>
            <br> <input type="password" placeholder="Password" name="password_field" required>

        </div>
        <div class="input-box3">
            <input type="submit" value="Submit" name="btn_submit">

        </div>
        <span>Already have an account? <a href="?page=login">Login</a></span>


    </form>
</div>