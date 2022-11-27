<?php 
include "admin_session-block.php";

include "../assets/_db_connect.php";

include "../assets/_admin_header.php";


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
  body{
    background-color: #ddd;
  }
        tr{
            transition: .8s;
            padding: 225px !important;
        }
        table{
            text-align: center;
            margin: auto;
            justify-content: center;
            justify-items: center;
            background-color: #fff;
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
            text-align: center !important;
            justify-content: center;
            margin: auto !important;
        }
    </style>


<div class="text-center main-table">
<table class="table text-center" >
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
      $join_date = $row['datetime'];
    // first the date from the database make it strtotime and store it on a variable
    $jd= strtotime($join_date);

    // then add the variable on the date function
    $joined_date = date("h:i:s m-d-Y", $jd);
     
      echo '<tr class = "">
      <th scope="row">'. $serialno++ .'</th>
      <td>'. $username .'</td>
      <td>'. $user_email .'</td>
      <td>'. $user_phone_no .'</td>
      <td> Joined on '. $joined_date .'</td>
      </tr>';
      
      
    }
  

    ?>
   
   
  </tbody >
</table>
</div>