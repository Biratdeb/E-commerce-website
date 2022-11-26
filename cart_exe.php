<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php 





if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $product_color = $_POST['product_color'];
    $product_price = $_POST['product_price'];
    $product_model_no = $_POST['product_model_no'];

    // $updimgname = $_FILES['deleimg']['name'];
    // $upimgtmp = $_FILES['deleimg']['tmp_name'];
    // $upimgloc = 'upload_img/' . $updimgname;
    // $upimgtmp = $_FILES['upimg']['tmp_name'];


    include 'assets/_db_connect.php';

    $id_no = $_GET['sno'];

    $sqlupdate = "SELECT FROM `products` WHERE `products`.`id` = $id";

    // $delete = "DELETE FROM `img_uploads` WHERE `img_uploads`.`id` = 20";
    $result = mysqli_query($conn, $sqlupdate);

    if($result){
        echo 'deleted <br>';
        echo '<a href="admin_mannage.php"><button type="submit" class="btn btn-primary">go back to admin mannage</button> </a>';
        
        
        
        // header("location: admin_mannage.php");
    }
    else{
        echo 'we have faced some technical issue to delete this';
    }
}

















?>

<script src="../js/bootstrap.min.js"></script>