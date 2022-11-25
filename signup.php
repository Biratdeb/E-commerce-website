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
            height: 680px;
            color: white;
            border-radius: 50px;
            outline-color: green;
            opacity: 85% !important;

        }

        .content {
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
        .loginbox img {
            /* margin-left: 300px !important; */
            margin-left: 280px !important;
        }

        .custom-m-left {
            margin-left: 250px !important;

        }

        input {
            height: 45px;
            width: 250px !important;

        }

        .loginbox input,
        button {
            margin-top: 25px !important;
            margin-left: 200px !important;
            border-radius: 50px;
            border: 1px solid grey;
            color: black;
            /* outline: none; */
            outline-color: grey !important;

        }

        button {
            margin-left: 250px !important;
        }

        .loginbox input::placeholder {
            color: grey;

        }

        /* .loginbox input:hover{
      
            border: 1px solid grey ;
            
        } */
        .main-section {
            margin-left: 200px;
        }
    </style>
</head>

<body>

    <?php

    include "assets/_db_connect.php";
    if (isset($_POST['submit'])) {
        echo 'posted';
        include "assets/_db_connect.php";

        $username = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_phone_no = $_POST['user_phone'];
        $get_pass = $_POST['user_pas'];
        $cpass = $_POST['user_cpas'];
        if ($get_pass == $cpass) {

            $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo '<div class=" container">
                <div class="loginbox">
                    
                    <div class="content row">
                        <p class="text-center col-12 fs-2"><strong>Welcome to E-commerce website || Signup to create your user account </strong></p>
                        <div class="main-section col-12">
                            <img src="img/ecom-web-logo.png" class="text-center m-center" alt="" width="100px" style="border-radius: 10px;" srcset=""><br><br>
                            <p>Sorry the user already exist. Please <a href= "login.php">login</a>  with your user account</p><br>
                            <!-- <p>Forget your password ?</p> -->
                            <!-- <input type="tel" name="" id=""> -->
                            <!-- <input type="datetime" name="" id=""> -->
                            <!-- <input type="submit" value=""> -->
                        </div>
                    </div>
                </div>
            </div>';
                exit;
                // header("location:login.php");

            }
            else{

                $hash = password_hash($get_pass, PASSWORD_DEFAULT);
                $user_password = $hash;
                // echo $user_password;
    
    
                // if the users phone no remaim blank then the user will be added without phone no
                if ($user_phone_no == '') {
                    $sql = "INSERT INTO `users` (`username`, `user_email`, `password`) VALUES ('$username', '$user_email', '$user_password');;";
    
                    $result = mysqli_query($conn, $sql);
    
                    if ($result) {
                        echo "added the user successfully";
                    } 
                    else {
                        echo "cannot added the user successfully";
                    }
    
                }
    
                // else if the user gives the phone no then the user will be added with the phone no
                
                else {
                    $sql = "INSERT INTO `users` (`username`, `user_email`, `password`, `phone_no`) VALUES ('$username', '$user_email', '$user_password', '$user_phone_no');";
    
                    $result = mysqli_query($conn, $sql);
    
                    if ($result) {
                        echo "added the user successfully";
                    } else {
                        echo "cannot added the user successfully";
                    }
                }


            }

            // if()

       
        } else {
            echo ' your password doesnot match !!';
        }
        // $get_pass =$_POST['adm_user_pas'];
        // $hash = password_hash($get_pass, PASSWORD_DEFAULT);
        // $admin_password = $hash;
        // echo $admin_password;





    } else {
        echo 'not posted';
    }



    ?>





    <!-- user signup section starts here -->
    <form action="./signup.php" method="post" enctype="multipart/form-data ">
        <div class=" container">
            <div class="loginbox">

                <div class="content row">
                    <p class="text-center col-12 fs-2"><strong>Welcome to E-commerce website || Signup to create your user account </strong></p>
                    <div class="main-section col-12">
                        <img src="img/ecom-web-logo.png" class="text-center m-center" alt="" width="100px" style="border-radius: 10px;" srcset=""><br>
                        <input type="text" name="user_name" id="" class="text-center custom-m-left" placeholder="your username " required><br>
                        <!-- <label class="text-danger" style="margin-left:20px !important;">  *required </label> <br> -->
                        <input type="email" name="user_email" id="" class="text-center custom-m-left" placeholder="your email" required><br>
                        <input type="password" name="user_pas" id="" class="text-center custom-m-left" placeholder="your password" required><br>
                        <input type="password" name="user_cpas" id="" class="text-center custom-m-left" placeholder="confirm your password" required><br>
                        <input type="tel" name="user_phone" id="" class="text-center custom-m-left" placeholder="your phone no (optional)"><br>
                        <button type="submit" name="submit" class="btn btn-danger text-center">Signup</button><br><br>
                        <p>Already have a account? Please <a href="login.php"> Login </a> with your account</p>
                        <!-- <input type="tel" name="" id=""> -->
                        <!-- <input type="datetime" name="" id=""> -->
                        <!-- <input type="submit" value=""> -->
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- user signup section ends here -->
</body>

</html>