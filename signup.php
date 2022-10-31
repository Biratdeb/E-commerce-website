<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signup || E-commerce website</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            /* background-color: #EEEEEE; */
            background-image: url('img/img6.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .product-text {
            border: 1px solid black;
            width: 15vw;
            outline: none;
            border-radius: 50px;
            height: 5vh;
            text-align: center;
        }

        .product-text:enabled {
            border: 1px solid blue;
            color: blue;
        }

        ul li .custom-buttom {
            border-radius: 50px !important;
            background-color: #15F4BF;
        }

        ul li a {
            text-decoration: none !important;
        }

        .loginbox {
            align-items: center;
            justify-content: center;
            display: flex;
            margin-top: 100px;
            /* top: 50%; */
            /* height: 50px; */
            /* margin: 50px; */
            background-color: black;
            height: 580px;
            color: white;
            border-radius: 50px;
            outline-color: green;
            opacity: 85% !important;

        }
        .content{
            display: block;
        }

        /* .container {
            width: 500px;
            height: 850px;
            margin: 50px;
            outline: solid 1px black;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loginbox {
            width: auto;
            height: auto;
            border-radius: 50%;
            background-color: black;
        } */
        .loginbox img{
            /* margin-left: 300px !important; */
            margin-left: 280px !important;
        }
        .custom-m-left{
            margin-left: 250px !important;

        }
        input{
            height: 45px;
            width: 250px !important;
            
        }
        .loginbox input,button{
            margin-top: 25px !important;
            margin-left: 200px !important;
            border-radius: 50px;
            border: 1px solid grey;
            color: black;
            /* outline: none; */
            outline-color: grey !important;
            
        }
     button{
        margin-left: 250px !important;
     }
        .loginbox input::placeholder{
          color: grey;
            
        }
        /* .loginbox input:hover{
      
            border: 1px solid grey ;
            
        } */
        .main-section{
            margin-left: 200px;
        }
    </style>
</head>

<body>

    <?php 

    include "assets/_db_connect.php";
    if(isset($_POST['submit'])){
        echo 'posted';
    include "assets/_db_connect.php";

        $admin_username = $_POST['adm_user_name'];
        $get_pass =$_POST['adm_user_pas'];
        $hash = password_hash($get_pass, PASSWORD_DEFAULT);
        $admin_password = $hash;
        echo $admin_password;
        
        $sql = "INSERT INTO `users` (`user_id`, `username`, `password`, `datetime`) VALUES ('1001', 'birat', 'ddkjf', current_timestamp());";

        $result = mysqli_query($conn, $sql);

        if($result){
            echo "added the admin successfully";
        }
        else{
            echo "cannot added the admin successfully";
        }
    }
    else{
        echo 'not posted';
    }
    
    
    
    ?>




    
    <!-- user signup section starts here -->
    <form action="./signup.php" method="post" enctype="multipart/form-data ">
    <div class=" container">
        <div class="loginbox">
            
            <div class="content row">
                <p class="text-center col-12 fs-2"><strong>Welcome to E-commerce website || Signup to create your user account   </strong></p>
                <div class="main-section col-12">
                <img src="img/ecom-web-logo.png" class="text-center m-center" alt="" width="100px" style="border-radius: 10px;" srcset=""><br>
                <input type="text" name="adm_user_name" id=""class="text-center custom-m-left" placeholder="your username"><br>
                <input type="password" name="adm_user_pas" id=""class="text-center custom-m-left" placeholder="your password"><br>
                <input type="password" name="adm_user_pas" id=""class="text-center custom-m-left" placeholder="confirm your password"><br>
                <input type="password" name="adm_user_pas" id=""class="text-center custom-m-left" placeholder="your phone no (optional)"><br>
                <button type="submit" name="submit" class="btn btn-danger text-center">button</button>
                <!-- <input type="submit" value=""> -->
            </div>
            </div>
        </div>
    </div>
    </form>
    
    <!-- user signup section ends here -->
</body>

</html>