<?php 
include "admin_session-block.php";
include "../assets/_admin_header.php";
include "../assets/_db_connect.php"



?>
<style>
        tr{
            transition: .8s;
            padding: 225px !important;
            color: black !important;
        }
        thead{
            background-color: blue !important;
            color: white !important;
        }
        thead tr th{
            background-color: blue !important;
            color: white !important;
        }
        
        table{
            /* text-align: center; */
            margin: auto;
            justify-content: center;
            justify-items: center;
            color: white !important;
        }

        tr:hover{
            background-color: blue;
            color: white !important;
        }
        .custom-logo-color{
            color: #EF4123;
        }
        .main-table{
            /* text-align: center !important; */
            justify-content: center;
            margin: auto !important;
        }
    
    </style>


<div class="text-center main-table">
<table class="table text-center" border="1px" aria-colspan="10">
  <thead>
    <tr>
      <th scope="col">Serial no</th>
      <th scope="col">User id </th>
      <th scope="col">User Name </th>
      <th scope="col">User Email</th>
      <th scope="col">User Phone no</th>
      <th scope="col">Product id</th>
      <th scope="col">Product tracking id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Model no</th>
      <th scope="col">Product size</th>
      <th scope="col">Product Color</th>
      <th scope="col">Product Prize</th>
      <th scope="col">Product Estimated delivary date</th>
      <th scope="col">Product delivery status</th>
      <th scope="col">Product last checked in on</th>
      <th scope="col">Product last checked in date</th>
      <th scope="col">Product delivered on</th>
      <th scope="col">Product delivered time</th>
    </tr>
  </thead>
  <tbody>
    <?php
    

    $sqlimg = "SELECT * FROM `orders`";
    // $result = mysqli_query($conn, $sqlimg)

    $imgresult = mysqli_query($conn, $sqlimg);
    $serialno = 1;

    if($checkdata = mysqli_num_rows($imgresult) > 0){
        while($row = mysqli_fetch_assoc($imgresult)){

 

            $user_id = $row['user_id'];
            $username = $row['username'];
            $user_email = $row['user_email'];
            $user_phone_no = $row['phone_no'];
            $product_id = $row['product_id'];
            $product_tracking_id = $row['product_tracking_id'];
            $product_name = $row['product_name'];
            $product_model_no = $row['product_model_no'];
            $product_size = $row['product_size'];
            $product_color = $row['product_color'];
            $product_prize = $row['product_prize'];
            $product_esti_delivery_date = $row['product_esti_delivery_date'];
            $product_delivery_status = $row['product_delivery_status'];
            $product_last_checked_in_on = $row['product_last_checked_in_on'];
            $product_last_checked_in_date = $row['product_last_checked_in_date'];
            $product_delivered_on = $row['product_delivered_on'];
            $product_delivery_time = $row['product_delivery_time'];
            
           
            echo '<tr class = "">
            <th scope="row">'. $serialno++ .'</th>
            <td>'. $user_id .'</td>
            <td>'. $username .'</td>
            <td>'. $user_email .'</td>
            <td>'. $user_phone_no .'</td>
            <td>  '. $product_id .'</td>
            <td>  '. $product_tracking_id .'</td>
            <td>  '. $product_name .'</td>
            <td>  '. $product_model_no .'</td>
            <td>  '. $product_size .'</td>
            <td>  '. $product_color .'</td>
            <td>  '. $product_prize .'</td>
            <td>  '. $product_esti_delivery_date .'</td>
            <td>  '. $product_delivery_status .'</td>
            <td>  '. $product_last_checked_in_on .'</td>
            <td>  '. $product_last_checked_in_date .'</td>
            <td>  '. $product_delivered_on .'</td>
            <td>  '. $product_delivery_time .'</td>
            
            </tr>';
            
            
            // echo "";
            // echo $title. " " . $description . " " . $date;
            
          }
    }
  

    ?>
    <!-- <td><img src="upload_img/'. $imagename .'" width="50px"></td> -->

      <!-- -->
    <!-- <td><a href="update_img.php?sno='. $row['id']. '"><button type="submit"  class="btn btn-primary">update</button></a> <a href="delete_img.php?sno='. $row['id']. '"><button type="submit" class="btn btn-danger">delete</button></td>  -->
  </tbody >
</table>
<?php 

if(!$checkdata){
    echo '
 
    <h1>No data found</h1>
    ';
   
   
}



?>



<!-- <h1>Hello everyone</h1> -->