<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout your products</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- font awesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <div class="container">
        <!-- <i class="fa-solid fa-lock"></i> -->
        <h1 class="text-center">Your bills and Shipping info of your products</h1><br>
        <div class="row">
            <div class="col-6">
                <p>Give the full details for placing an order</p>

                <form action="" method="post">
                    <!-- <span>Your name</span><br> -->
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Your name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"><i class="fa-solid fa-lock"></i> We'll never share your info with anyone else.</div>
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"><i class="fa-solid fa-lock"></i> We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mobile No</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"><i class="fa-solid fa-lock"></i> We'll never share your any info with anyone else.</div>
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Shipping Address</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                            <div id="emailHelp" class="form-text"><i class="fas fa-info-circle"></i> Please make sure to give correct shipping address .</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Zila/state</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                            <div id="emailHelp" class="form-text"><i class="fas fa-info-circle"></i> Please make sure to give correct shipping address .</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Postal Code</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                            <div id="emailHelp" class="form-text"><i class="fas fa-info-circle"></i> Please make sure to give correct shipping address .</div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Country</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" value="Bangladesh">
                            <div id="emailHelp" class="form-text"><i class="fas fa-info-circle"></i> Please make sure to give correct shipping address .</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="exampleInputPassword1">
                            <div id="emailHelp" class="form-text"><i class="fas fa-info-circle"></i> Please make sure to give the quantity of the product .</div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Place order</button>
                    </form>
                    <!-- <span>Your name</span><br>
                    <input type="text" name="" id="" placeholder="Shipping Adress"><br><br>
                    <span>Your name</span><br>
                    <input type="text" name="" id="" placeholder="Quantity"><br><br>
                    <span>Your name</span><br>
                    <input type="text" name="" id="" placeholder=""><br><br>
                    <span>Your name</span><br>
                    <input type="text" name="" id="" placeholder="Prize"><br><br>
                    <input type="text" name="" id="" placeholder="total prize"><br><br> -->

                </form>

            </div>
            <div class="col-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Products</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">prize</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="img/watch.jpg" width="50px" height="50px" alt="" > Watch <span><a href="">remove</a></span></td>
                            <td><input type="number" name="" id="" class="form-control" value="1"></td>
                            <td>$20</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- <div class="for-block col-3">

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
                    </div> -->
        </div>
    </div>

    </div>
</body>

</html>