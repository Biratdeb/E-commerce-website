<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce store | The best store platform</title>

    <!-- bootstrap all files link -->

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">



    <!-- bootstrap css cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- custom css files -->
    <link rel="stylesheet" href="css/style.css">

    <!-- responsive css files -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <?php

    include "_constant.php";






    ?>
    <!-- navbar starts here -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top mar-pad-0">
        <div class="container-fluid navbar-color ">
            <a class="navbar-brand custom-text-respon" href="<?php echo SITE_URL?>">E-commerce website <br> E-com LTD.</a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon custom-text-respon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto text-center mb-2 mb-lg-0  ">

                    <li class="nav-item">
                        <a class="nav-link text-white custom-text-respon" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white custom-text-respon" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Shop
                        </a>
                        <ul class="dropdown-menu custom-dropdown-background-color text-white" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item custom-text-respon custom-dropdown-transition" href="#">All Products</a></li>
                            <li><a class="dropdown-item custom-text-respon custom-dropdown-transition" href="#">Featured Products</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item custom-text-respon custom-dropdown-transition" href="#">Are Your Looking <br> Something
                                    else ? Then search
                                    here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Help</a>
                    </li>
                    <li class="nav-item mx-5 mt-2">
                        <input type="text" name="search-button" id="" class="search-button " placeholder="search products">
                    </li>
                    <li class="nav-item ">
                        <button class="btn btn-blue-green custom-border text-black  custom-buttom  mx-5 my-2"> <a href="#" class="custom-black"> Your Craft</a></button>
                    </li>

                </ul>

            </div>
        </div>

    </nav>

    <!-- navbar section ends here -->