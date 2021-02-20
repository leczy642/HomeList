<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TechOracle Admin</title>
    <link rel="stylesheet" href="./assets/vendors/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/vendors/jquery/jquery.min.js"></script>
    <script src="assets/js/loader.js"></script>
</head>

<body>
    <div class="oleez-loader"></div>
    <header class="oleez-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!--<a class="navbar-brand" href="index.html"><img src="assets/images/Logo_2.svg" alt="Oleez"></a>-->
            <h2>TechOracle</h2>
            <ul class="nav nav-actions d-lg-none ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#!" data-toggle="searchModal">
                        <img src="assets/images/search.svg" alt="search">
                    </a>
                </li>
                <li class="nav-item nav-item-cart">
                    <a class="nav-link" href="#!">
                        <span class="cart-item-count">0</span>
                        <img src="assets/images/shopping-cart.svg" alt="cart">
                    </a>
                </li>
                <li class="nav-item dropdown d-none d-sm-block">
                    <a class="nav-link dropdown-toggle" href="#!" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ENG</a>
                    <div class="dropdown-menu" aria-labelledby="languageDropdown">
                        <a class="dropdown-item" href="#!">ARB</a>
                        <a class="dropdown-item" href="#!">FRE</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!" data-toggle="offCanvasMenu">
                        <img src="assets/images/social icon@2x.svg" alt="social-nav-toggle">
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#oleezMainNav" aria-controls="oleezMainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="oleezMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link post-tag" href=<?php echo('./admin_index.php')?>>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link post-tag" href=<?php echo('./add_post.php');?>>Add new post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link post-tag" href=<?php echo('./admin_index.php')?>>Edit post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link post-tag" href=<?php echo('./admin_index.php')?>>Delete post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link post-tag" href=<?php echo('./admin_index.php')?>>View posts</a>
                    </li>
                    
                </ul>
            </div>
        </nav>
    </header>