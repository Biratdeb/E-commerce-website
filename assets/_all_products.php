<!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
<?php
include "_db_connect.php";

// sql to get all the products

$sql = "SELECT * FROM `products`";

// result query to run the query

$result = mysqli_query($conn, $sql);
echo '<div class="container">
<div class="row">

';
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

            echo '
            
            <div class="col-3 mt-2 mb-2">
                <div class="card border" style="width: 18rem;">
                    <img src="../product_img/'.$row['product_img'].'" class="card-img-top" alt="'.$row['product_name'].'">
                    <div class="card-body">
                        <h5 class="card-title">Product Name : '.$row['product_name'].'</h5>
                        <p class="card-text">Description : '.$row['product_desc'].'.</p>
                        <p class="card-text">Color : '.$row['product_color'].'.</p>
                        <p class="card-text">Model No : '.$row['product_model_id_no'].'.</p>
                        <p class="card-text">Price : '.$row['product_price'].'tk.</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
           
        
        
   ';


            //     echo '<div class="row row-cols-1 row-cols-md-2 g-4">
            //     <div class="col-3">
            //       <div class="card">
            //         <img src="..." class="card-img-top" alt="...">
            //         <div class="card-body">
            //           <h5 class="card-title">Card title</h5>
            //           <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            //         </div>
            //       </div>
            //     </div>

            //   </div>';
        }
    }
}

echo '</div>
</div>';

?>
<script src="../js/bootstrap.min.js"></script>


<!-- </div></div>
    <div class="col-3"><div class="row row-cols-1 row-cols-md-2 g-4">
             <div class="col-3">
               <div class="card">
               <img src="..." class="card-img-top" alt="...">
               <div class="card-body">
                 <h5 class="card-title">Card title</h5>
                 <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               </div>
             </div>
           </div>
         
           </div></div>
    <div class="col-3"><div class="row row-cols-1 row-cols-md-2 g-4">
             <div class="col-3">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
     
           </div></div>
    <div class="col-3"><div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col-3">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
           
        //   </div></div>
</div> -->