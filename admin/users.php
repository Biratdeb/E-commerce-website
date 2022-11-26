<?php 
include "admin_session-block.php";

include "../assets/_db_connect.php";


$sql = "SELECT * FROM `users`";

$result = mysqli_query($conn, $sql);

// if ($result){
//     if(mysqli_num_rows($result) > 0){
//         while($row = mysqli_fetch_assoc($result)){
//             echo '<table></table>'
//         };
//     }
// }



?>

<table>
    <th></th><tr></tr>
</table>



<style>
        tr{
            transition: .8s;
            padding: 225px !important;
        }
        table{
            /* text-align: center; */
            margin: auto;
            justify-content: center;
            justify-items: center;
        }
        td{
            padding: 25px !important;
        }
        tr:hover{
            background-color: blue;
            color: white;
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
<table class="table text-light text-center" border="20px" aria-colspan="10">
  <thead>
    <tr>
      <th scope="col">Serial no</th>
      <th scope="col">User name </th>
      <th scope="col">User Email</th>
      <th scope="col">User Phone no</th>
      <th scope="col">Joined on</th>
    </tr>
  </thead>
  <tbody>
    <?php
    

    $sqlimg = "SELECT * FROM `users`";

    $imgresult = mysqli_query($conn, $sqlimg);
    $serialno = 1;
    
    while($row = mysqli_fetch_assoc($imgresult)){

 

      $user_id = $row['user_id'];
      $username = $row['username'];
      $user_email = $row['user_email'];
      $user_phone_no = $row['phone_no'];
      $joined_in = $row['datetime'];
     
      echo '<tr class = "">
      <th scope="row">'. $serialno++ .'</th>
      <td>'. $username .'</td>
      <td>'. $user_email .'</td>
      <td>'. $user_phone_no .'</td>
      <td> Joined on '. $joined_in .'</td>
      </tr>';
      
      
      // echo "";
      // echo $title. " " . $description . " " . $date;
      
    }
    // echo filetype(img/space.jpg);
    // if(filetype("img/space.jpg") == "img/jpg"){
    //   echo 'file is jpg';
    // }
    // else{
    //   echo 'file is not jpg';
    // }
    


    ?>
    <!-- <td><img src="upload_img/'. $imagename .'" width="50px"></td> -->

      <!-- -->
    <!-- <td><a href="update_img.php?sno='. $row['id']. '"><button type="submit"  class="btn btn-primary">update</button></a> <a href="delete_img.php?sno='. $row['id']. '"><button type="submit" class="btn btn-danger">delete</button></td>  -->
  </tbody >
</table>
</div>