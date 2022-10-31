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
            <a class="navbar-brand custom-text-respon" href="<?php echo SITE_URL ?>">E-commerce website <br> E-com LTD.</a>


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
                    <li class="nav-item new-login">
                        <a href="#" class=""><button class="btn btn-dark custom-border text-light custom-login-btn custom-buttom  mx-5 my-2"> Login</button></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class=""><button class="btn btn-outline-danger custom-signup-btn custom-border text-light custom-buttom  mx-5 my-2"> Signup</button></a>
                    </li>

                    <style>
                        .custom-signup-btn{
                            border: 1px solid red !important;
                            transition: all 500ms ease-in;
                            color: white;
                        }
                        .custom-signup-btn:hover{
                            border: 1px solid red !important;
                            transition: all 500ms ease-in;
                            /* color: black !important; */
                        }
                        .custom-signup-btn a:hover{
                            color: black !important;
                            /* border: 1px solid red !important;
                            transition: all 500ms ease-in; */
                        }
                        .custom-login-btn a{
                            /* transition: all 1000ms ease-in;
                            background-color: white; */
                            color: white !important;
                            transition: all 1000ms ease-in;
                            /* background-color: white; */
                        }

                        .custom-login-btn a:hover {
                            /* transition: all 1000ms ease-in;
                            background-color: white; */
                            color: black !important;
                            /* transition: all 1000ms ease-in; */
                            /* background-color: white; */




                        }

                        .new-login button:hover {
                            color: black !important;
                        }

                        .custom-login-btn {
                            transition: all 1000ms ease-in;
                            color: white !important;
                            /* background-color: white; */
                        }

                        .custom-login-btn:hover {
                            transition: all 500ms ease-in;
                            color: black !important;
                            background-color: white;
                        }
                    </style>
                    <!-- <button class="btn btn-success rounded-border">Login</button> -->
                </ul>

            </div>
        </div>

    </nav>

    <!-- navbar section ends here -->