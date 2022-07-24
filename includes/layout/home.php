<div class="container">

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item carousel-img active">
                <img src="./images/banner.png" class="d-block w-100" alt="...">
                <?php
                if (@$_SESSION['userName'] == "") {

                ?>
                <div class="banner-btn text-center">
                    <a href="/E-Blog?page=login" class="btn btn-primary ps-5 pe-5" role="button" aria-disabled="true">Login</a>
                    <a href="/E-Blog?page=signup" class="btn btn-secondary ps-5 pe-5" role="button" aria-disabled="true">Signup</a>
                </div>
                <?php
             
                }
                ?>

            </div>

        </div>
    </div>
</div>

