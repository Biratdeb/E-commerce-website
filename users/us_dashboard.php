<?php 
include "../assets/_db_connect.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard -- Welcome to the dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <?php 
    include "../assets/_us_header.php";
    
    // session_start();
            echo 'your email is:'. $_SESSION['user_email'];
            echo 'user joined in : '. $_SESSION['user_joined_in'].' and your user id is '. $_SESSION['user_id'];
    ?>
    <div class="container mt-4">
    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Welcome!</h4>
  <p><?php echo $_SESSION['username'] ?> welcome you to the dashboard again . You have successfully logged in the dashboard and from here you can mannage everything. So keep the  this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>
</div>

<?php include "../assets/_all_products.php" ?>


<script src="../js/bootstrap.min.js"></script>
</body>
</html>