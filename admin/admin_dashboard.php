<?php 
session_start();
if(!isset($_SESSION['admin_username'])){

//    echo 'logged in';
   header("location:login.php");

}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard || Best E-commerce website</title>
    <!-- <link rel="stylesheet" href="../css/bootstrap-grid.min.css"> -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
</head>
<style>
    body{
        background-color: #EEEEEE;
    }
   
    .product-text{
        border: 1px solid black;
        width: 15vw;
        outline: none;
        border-radius: 50px;
        height: 5vh;
        text-align: center;
    }
    .product-text:enabled{
        border: 1px solid blue;
        color: blue;
    }
    ul li .custom-buttom {
    border-radius: 50px !important;
    background-color: #15F4BF;
}

ul li a{
    text-decoration: none !important;
}
</style>
<body>

    <?php 
    include "../assets/_header.php";
    include "../assets/_db_connect.php";
    
    ?>
    
    
    <div class="container">
        <h1>Welcome to our Admin Panel</h1>
        <p></p>
        <small>logged in as <strong><?php echo $_SESSION['admin_username'] ?></strong></small> <br> <br>
        <button class="btn btn-danger text-light"><a href="logout.php" class="text-light">Log Out</a></button>
        <div class="add-products">
            <div class="container text-center">
                <?php 
                // if(isset($_SERVER['REQUEST_METHOD'])== "POST"){
                //     echo 'post works';
                    
                // }
                // else{
                //     echo 'post cannot work';
                // }

              

                include "../assets/_db_connect.php";
               if(isset($_POST['submit_products'])){
                
                
                // product details to add on the product section

                $product_model = $_POST['product_model'];
                $product_name = $_POST['product_name'];
                $product_desc = $_POST['product_desc'];
                $product_price = $_POST['product_price'];
                $product_color = $_POST['product_color'];

                // $product_img = $_POST['product_img'];

                $product_img = $_FILES['img']['name'];
                echo var_dump($product_img);
                $product_img_tmpname = $_FILES['img']['tmp_name'];
               

                $product_img_upload_location = '../product_img/' . $product_img;

               echo strlen($product_name);

                // sql to add all the product data into the product section

                $sql_add_product = "INSERT INTO `products` (`id`, `product_model_id_no`, `product_name`, `product_desc`, `product_img`, `product_color`, `product_price`, `datetime`) VALUES (NULL, '$product_model', '$product_name', '$product_desc', '$product_img', '$product_color', '$product_price', current_timestamp());";
                
                
                // $sql_add_product = "INSERT INTO `products` (`product_img`, `datetime`) VALUES ('$product_img', current_timestamp());";
                $result = mysqli_query($conn, $sql_add_product);

                if($result){
                    move_uploaded_file($product_img_tmpname, $product_img_upload_location);
                    echo 'posted successfully all the data';
                    echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Successfully added all product information on the product section.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';

                }else{
                    echo 'product not works';
                }
               }
               else{
                echo 'post csnnot work';
               }
                
                
                
                
                
                
                ?>
                <!-- product section add products starts here -->
            <b><p class="fs-5">Add  products to products section</p></b>
            <form action="./admin_dashboard.php" method="post" enctype="multipart/form-data">
                <input type="text" name="product_model" id="" placeholder="Product Model No" class="product-text" required><br><br>
                <input type="text" name="product_name" id="" placeholder="Product name" class="product-text" required><br><br>
                <input type="text" name="product_desc" id="" placeholder="Product discription" class="product-text" required ><br><br>
                <input type="text" name="product_price" id="" placeholder="Product Price" class="product-text" required><br><br>
                <input type="text" name="product_color" id="" placeholder="Product Color" class="product-text" required><br><br>
                <input type="file" name="img" id="" class="file" required ><br><br>
                <button type="submit" class="btn btn-success" name="submit_products">Submit</button><br>
                </form>
            </div>
        </div><br><br><br><br>

        <!-- product section add products ends here -->

        <!-- featured product section starts here -->
<!--         
        <div class="add-products-featured">
            <div class="container text-center">
                <b><p class="fs-5">Add  products featured section</p></b>
                <form action="./admin_dashboard.php" method="post">
                <input type="text" name="" id="" placeholder="Featured Product name" class="product-text"><br><br>
                <input type="text" name="" id="" placeholder="Featured Product Description" class="product-text"><br><br>
                <input type="text" name="" id="" placeholder="Featured Product Price" class="product-text"><br><br>
                <input type="text" name="" id="" placeholder="Featured Product Color" class="product-text"><br><br>
                <input type="text" name="" id="" placeholder="Featured Product Model No" class="product-text"><br><br>
                <input type="file" name="" id="" class="file"><br><br>
                <button type="submit" class="btn btn-success">Submit</button><br>
                </form>
                
            </div>
        </div>
    </div> -->
    <!-- featured product section ends here -->

    <?php include "../assets/_footer.php" ?>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>