<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        #body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }

        a {
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="styles/style.css">
    <title>e-blog</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgb(255, 245, 245);">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">E BLOG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="?page=blogs">Blogs</a>
                    <a class="nav-link" href="?page=about">About</a>
                </div>
                <?php

                if (isset($_GET['page']) && $_GET['page']  == 'blogs') {

                ?>
                    <form method="POST" action="" class="d-flex" style="margin-left: 25%;">
                        <input class="form-control me-2 " name="searchKey" type="search" placeholder="Search" aria-label="Search">
                        <input name="page" value="blogs" type="hidden">
                        <button class="btn btn-outline-success" name="btn_search" value="Search" type="submit">Search</button>
                    </form>
                <?php } ?>
                <?php
                $user =  @$_SESSION['user'];
                if ($user != "") {

                ?>
                    <div class="d-flex" style="margin-left: auto">
                        <span>[ <a href="?page=usr"><?= $_SESSION['user']->full_name; ?></a> ]</span> &nbsp;
                        <a href="/E-Blog/includes/actions/LogoutAction.php" value="Logout" name="btn_logout">Logout</a>

                    </div>
                <?php
                }
                ?>

            </div>

        </div>
    </nav>
    <!-- Navbar -->