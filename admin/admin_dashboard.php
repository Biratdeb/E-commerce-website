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
</style>
<body>
    <?php 
    include "../assets/_header.php";?>
    
    <div class="container">
        <h1>Welcome to our Admin Panel</h1>
        <small>Logged in as Lokeshwar Deb</small> <br> <br>

        <div class="add-products">
            <div class="container text-center">
                <?php 
                if(isset($_SERVER['REQUEST_METHOD'])== "POST"){
                    echo 'post works';
                }
                else{
                    echo 'post cannot work';
                }
                include "../assets/_db_connect.php";
            //    if(isset($_POST['submit'])){
            //     echo 'post woks';
            //    }
            //    else{
            //     echo 'post csnnot work';
            //    }
                
                
                
                
                
                
                ?>
            <b><p class="fs-5">Add  products to products section</p></b>
            <form action="./admin_dashboard.php" method="post">
                <input type="text" name="product_name" id="" placeholder="Product name" class="product-text"><br><br>
                <input type="text" name="product_desc" id="" placeholder="Product discription" class="product-text"><br><br>
                <input type="text" name="product_price" id="" placeholder="Product Price" class="product-text"><br><br>
                <input type="text" name="product_color" id="" placeholder="Product Color" class="product-text"><br><br>
                <input type="text" name="product_model" id="" placeholder="Product Model No" class="product-text"><br><br>
                <input type="file" name="" id="" class="file"><br><br>
                <button type="submit" class="btn btn-success">Submit</button><br>
                </form>
            </div>
        </div><br><br><br><br>
        
        <div class="add-products-featured">
            <div class="container text-center">
                <b><p class="fs-5">Add  products featured section</p></b>
                <input type="text" name="" id="" placeholder="Product name" class="product-text"><br><br>
                <input type="text" name="" id="" placeholder="Product discription" class="product-text"><br><br>
                <input type="text" name="" id="" placeholder="Product Price" class="product-text"><br><br>
                <input type="text" name="" id="" placeholder="Product Color" class="product-text"><br><br>
                <input type="text" name="" id="" placeholder="Product Model No" class="product-text"><br><br>
                <input type="file" name="" id="" class="file"><br><br>
                <button type="submit" class="btn btn-success">Submit</button><br>
                
            </div>
        </div>
    </div>
    

    <?php include "../assets/_footer.php" ?>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>