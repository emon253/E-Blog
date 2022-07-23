<?php
include './includes/layout/header.php'
?>
<div class="container">

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item carousel-img active">
                <img src="./images/banner.png" class="d-block w-100" alt="...">
                <div class="banner-btn text-center">
                    <a href="./includes/dynamic/login.php" class="btn btn-primary ps-5 pe-5" role="button" aria-disabled="true">Login</a>
                    <a href="./includes/dynamic/signup.php" class="btn btn-secondary ps-5 pe-5" role="button" aria-disabled="true">Signup</a>
                </div>

            </div>

        </div>
    </div>
</div>




<?php
include './includes/layout/footer.php'
?>