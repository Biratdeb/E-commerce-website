<?php

// use function PHPSTORM_META\type;

include "assets/_header.php"; ?>
<?php include "assets/_db_connect.php"; ?>
<?php include "assets/_constant.php"; ?>

<!-- hero-aria starts here -->

<div class="hero-aria container-fluid hero-custom-bg">

    <div class="img-gallary-contents text-center pt-2 custom-text-respon ">
        <img src="img/black-sunglass.jpg" class="img-fluid img-sun" alt="" srcset="">
        <img src="img/headphone.jpg" class="img-fluid img-sun" alt="" srcset="">
        <img src="img/phote camera.jpg" class="img-fluid img-sun" alt="" srcset="">
    </div>
    <button class="btn btn-custom-hero mx-5 mt-5 custom-responsive-btn custom-text-respon"><a href="#" class="custom-black "> Shop now </a></button>

    <!-- <button type="submit" class="btn btn-success text-center "> Shop Now</button> -->
</div>
<hr>



<!-- hero-aria ends here -->



<!-- featured section starts here -->


<div class="container-fluid featured-section">

    <div class="row">
        <div class="col-12">
            <p class="align-text-center p-featured text-light">Our featured products</p>
            <!-- carosel on bootstrap -->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <div class=" product-content">
                            <div class="product1">
                                <div class="row text-align-center">
                                    <div class="for-block col-3">

                                        <a href="<?php SITE_URL ?>admin/admin_dashboard.php/">

                                            <img src="img/mordern_watch.jpg" class="d-block w-100 img-fluid  custom-carosel-img respon-img-product" alt="..."><br>
                                            <div class="for-only-prod-p">
                                                <p class="product-p">Product name: Mordern SITE_URL products <br> color:
                                                    black
                                                    <br>
                                                    price:$20
                                                    <br> model no : brrkd6584ds
                                                </p>
                                                <button type="submit" class="btn btn-success">Add to cart</button>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="for-block col-3" id="cart-btn">

                                        <a href="#">

                                            <img src="img/headphone.jpg" class="d-block w-100 img-fluid  custom-carosel-img respon-img-product" alt="..."> <br>
                                            <div class="for-only-prod-p">
                                                <p class="product-p">Product name: Mordern products <br> color:
                                                    black
                                                    <br>
                                                    price:$20
                                                    <br> model no : brrkd6584ds
                                                </p>
                                                <button type="submit" class="btn btn-success">Add to cart</button>
                                            </div>
                                        </a>
                                    </div>



                                    <div class="for-block col-3">

                                        <a href="#">

                                            <img src="img/big-camere.jpg" class="d-block w-100 img-fluid  custom-carosel-img respon-img-product" alt="..."><br>

                                            <div class="for-only-prod-p">
                                                <p class="product-p">Product name: Mordern products <br> color:
                                                    black
                                                    <br>
                                                    price:$20
                                                    <br>
                                                    model no : brrkd6584ds
                                                </p>
                                                <button type="submit" class="btn btn-success">Add to cart</button>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="for-block col-3">

                                        <a href="#">

                                            <img src="img/watch.jpg" class="d-block w-100 img-fluid  custom-carosel-img respon-img-product" alt="..."><br>

                                            <div class="for-only-prod-p">
                                                <p class="product-p">Product name: Mordern products <br> color:
                                                    black
                                                    <br>
                                                    price:$20
                                                    <br>
                                                    model no : brrkd6584ds
                                                </p>
                                                <button type="submit" class="btn btn-success">Add to cart</button>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class=" product-content">
                            <div class="product1">
                                <div class="row text-align-center">
                                    <div class="for-block col-3">

                                        <a href="#">

                                            <img src="img/mordern_watch.jpg" class="d-block w-100 img-fluid  custom-carosel-img respon-img-product" alt="..."><br>
                                            <div class="for-only-prod-p">
                                                <p class="product-p">Product name: Mordern products <br> color:
                                                    black
                                                    <br>
                                                    price:$20
                                                    <br> model no : brrkd6584ds
                                                </p>
                                                <button type="submit" class="btn btn-success">Add to cart</button>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="for-block col-3">

                                        <a href="#">

                                            <img src="img/headphone.jpg" class="d-block w-100 img-fluid  custom-carosel-img respon-img-product" alt="..."> <br>
                                            <div class="for-only-prod-p">
                                                <p class="product-p">Product name: Mordern products <br> color:
                                                    black
                                                    <br>
                                                    price:$20
                                                    <br> model no : brrkd6584ds
                                                </p>
                                                <button type="submit" class="btn btn-success">Add to cart</button>
                                            </div>
                                        </a>
                                    </div>



                                    <div class="for-block col-3">

                                        <a href="#">

                                            <img src="img/big-camere.jpg" class="d-block w-100 img-fluid  custom-carosel-img respon-img-product" alt="..."><br>

                                            <div class="for-only-prod-p">
                                                <p class="product-p">Product name: Mordern products <br> color:
                                                    black
                                                    <br>
                                                    price:$20
                                                    <br>
                                                    model no : brrkd6584ds
                                                </p>
                                                <button type="submit" class="btn btn-success">Add to cart</button>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="for-block col-3">

                                        <a href="#">

                                            <img src="img/watch.jpg" class="d-block w-100 img-fluid  custom-carosel-img respon-img-product" alt="..."><br>

                                            <div class="for-only-prod-p">
                                                <p class="product-p">Product name: Mordern products <br> color:
                                                    black
                                                    <br>
                                                    price:$20
                                                    <br>
                                                    model no : brrkd6584ds
                                                </p>
                                                <button type="submit" class="btn btn-success">Add to cart</button>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class=" product-content">
                            <div class="product1">
                                <div class="row text-align-center">
                                    <div class="for-block col-3">

                                        <a href="#">

                                            <img src="img/mordern_watch.jpg" class="d-block w-100 img-fluid  custom-carosel-img respon-img-product" alt="..."><br>
                                            <div class="for-only-prod-p">
                                                <p class="product-p">Product name: Mordern products <br> color:
                                                    black
                                                    <br>
                                                    price:$20
                                                    <br> model no : brrkd6584ds
                                                </p>
                                                <button type="submit" class="btn btn-success">Add to cart</button>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="for-block col-3">

                                        <a href="#">

                                            <img src="img/headphone.jpg" class="d-block w-100 img-fluid  custom-carosel-img respon-img-product" alt="..."> <br>
                                            <div class="for-only-prod-p">
                                                <p class="product-p">Product name: Mordern products <br> color:
                                                    black
                                                    <br>
                                                    price:$20
                                                    <br> model no : brrkd6584ds
                                                </p>
                                                <button type="submit" class="btn btn-success">Add to cart</button>
                                            </div>
                                        </a>
                                    </div>



                                    <div class="for-block col-3">

                                        <a href="#">

                                            <img src="img/big-camere.jpg" class="d-block w-100 img-fluid  custom-carosel-img respon-img-product" alt="..."><br>

                                            <div class="for-only-prod-p">
                                                <p class="product-p">Product name: Mordern products <br> color:
                                                    black
                                                    <br>
                                                    price:$20
                                                    <br>
                                                    model no : brrkd6584ds
                                                </p>
                                                <button type="submit" class="btn btn-success">Add to cart</button>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="for-block col-3">

                                        <a href="#">

                                            <img src="img/watch.jpg" class="d-block w-100 img-fluid  custom-carosel-img respon-img-product" alt="..."><br>

                                            <div class="for-only-prod-p">
                                                <p class="product-p">Product name: Mordern products <br> color:
                                                    black
                                                    <br>
                                                    price:$20
                                                    <br>
                                                    model no : brrkd6584ds
                                                </p>
                                                <button type="submit" class="btn btn-success">Add to cart</button>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>


</div>





<!-- featured section ends here -->



<!-- our newsletter section starts here -->


<div class="container-fluid ">

    <div class="row custom-newsletter-section">
        <div class="col-4 text-start m-5">
            <h4>Subcribe our newsletter</h4><br><br>
            <p class="custom-text-bold">Get touched with our newsletter to get our latest updates <br> and our
                newest brands for you.
                we have the biggest community on our newsletter. Give your email address and hit <br> the
                subcribe button to subcribe our newsletter.

            </p>
        </div>
        <div class="col-4 text-end pt-5">

            <form action="./index.php" method="post">
                <input type="email" id="subs_email" name="subscribe_email" placeholder="Eamil Address" class="custom-news-subcribe-input-btn" required>
                <button id="sub" onclick="sub()" name="subscribe" type="submit" class="custom-news-subcribe-submit-btn custom-responsive-btn custom-text-respon respon-p">Subscribe</button>

                <?php
                if (isset($_POST['subscribe'])) {
                    // echo 'submited subs';
                    $subscribed_email = $_POST['subscribe_email'];
                    if ($subscribed_email == !'') {
                        echo 'Subscribed with the email ';
                        echo $subscribed_email;
                        // echo '. Thanks for staying with us..';
                        echo '<button style = "margin-left:40px;width:8rem;color:white;background-color:grey !important; border:1px solid black; border-radius:100px; outline:none">Subscribed</button>';
                        echo '  <script>
                                     document.getElementById("sub").style = "display:none;"
                                </script>';
                        echo '  <script>
                                     document.getElementById("subs_email").style = "display:none;"
                                </script>';
                    } else {
                        echo 'you have to choose the email';
                    }
                } else {
                    // echo 'not submitted subs';
                }




                ?>

            </form>
        </div>
    </div>

</div>

<!-- <?php
        if (isset($_POST['subscribe'])) {
            echo 'submited subs';
            $subscribed_email = $_POST['subscribe_email'];
            if ($subscribed_email == '') {
                echo ' you have to choose the email';
                echo '<button style = "width:8rem;color:white;background-color:grey !important; border:1px solid black; border-radius:100px; outline:none">SUBSCRIBED</button>';
                //     echo '  <script>
                //     function sub() {
                //         document.getElementById("sub").innerHTML = '.'<button style = "width:8rem;color:white;background-color:grey; border:1px solid black; border-radius:100px; outline:none">SUBSCRIBED</button>'.'
                //     }
                //     // function sub();
                // </script>';
            } else {
                echo 'you have choosen the email';
            }
        } else {
            echo 'not submitted subs';
        }




        ?> -->



<!-- our newsletter section starts ends -->


<!-- product section starts -->

<div class="product-section">

    <div class="product-main product-content">

        <div class="product1">
            <form action="" method="get">

            </form>
            <div class="row text-align-center mt-3">
                <?php

                include "assets/_all_products_index.php";
                
                if (isset($_GET['addCart'])) {
                    $product_name = $_GET['product_name'];
                    $product_color = $_GET['product_color'];
                    $product_price = $_GET['product_price'];
                    $product_model_no = $_GET['product_model_no'];
                } else {
                    echo 'something went wrong';
                }



                ?>
                <style>
                    .product-p input {
                        text-align: center !important;
                    }
                </style>
                <!-- <p name ="></p> -->
                <!-- <input type="text" name="" style="border: none !important; outline:none" readonly> -->
                <!-- <div class="for-block col-3">

                        <a href="#">

                            <img src="img/mordern_watch.jpg"
                                class="d-block w-100 img-fluid  custom-carosel-img respon-img-product" alt="..."> <br>
                            <div class="for-only-prod-p">
                                <p class="product-p">Product name: Mordern products <br> color:
                                    black
                                    <br>
                                    price:$20
                                    <br> model no : brrkd6584ds</p>
                                    <button type="submit" class="btn btn-success">Add to cart</button>
                            </div>
                        </a>
                    </div>



            -->

                <!-- product section ends -->


                <!-- about us section starts -->

                <style>
                    .aboutus{
                        width: auto !important;
                    }
                </style>
                <div class="about-us-section">
                    <div class="container-fluid aboutus">
                        <h2>About us</h2>
                        <div class="row">
                            <div class="col-6">
                                <p class="about-p">We are one of the biggest online store and we provide the best product for you.
                                    <br>
                                    You can be find the latest product and get the chepest prize from us
                                </p>
                            </div>
                            <div class="col-6">
                                <img src="img/store.jpg" class="img-fluid about-img " alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>





                <!-- about us section ends -->


                <!-- <script src="js/script.js"></script> -->
                <script>
                    function sub() {
                        document.getElementById('sub').innerHTML = '<button style = "width:8rem;color:white;background-color:grey !important; border:1px solid black; border-radius:100px; outline:none">SUBSCRIBED</button>'
                    }
                    // function sub();
                </script>

                <?php include "assets/_footer.php"; ?>