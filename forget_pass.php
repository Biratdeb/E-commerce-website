<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Forget Password || E-commerce website</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            /* background-color: #EEEEEE; */
            /* background-color: darkslategrey; */
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
            /* background-color: slategrey; */
            background-color: black;
            height: 660px;
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




    <!-- admin login section starts here -->
    <form action="./forget_pass.php" method="post" enctype="multipart/form-data " id="forget_pass_vari">
        <div class=" container">
            <div class="loginbox">

                <div class="content row">
                    <p class="text-center col-12 fs-2"><strong>Welcome to E-commerce website || Are you have forgoted your password ?</strong></p>
                    <div class="main-section col-12">
                        <p>please give the information bellow to reset your password</p>
                        <img src="img/ecom-web-logo.png" class="text-center m-center" alt="" width="100px" style="border-radius: 10px;" srcset=""><br>
                        <input type="text" id="user_name" name="user_name" class="text-center custom-m-left" placeholder="your username" required><br>
                        <input type="email" id="user_email" name="user_email" class="text-center custom-m-left" placeholder="your email" required><br>
                        <input type="password" name="user_pas" id="reset_pass" class="text-center custom-m-left" placeholder="your password" required style="display: none;"><br>
                        <button type="submit" name="submit" class="btn btn-danger text-center">login</button><br><br>
                        <p>Don't have a account? Please <a href="signup.php"> Signup </a> to create your account</p>
                        <p>I have<a href="forget_pass.php"> forgoted </a> my password</p>
                        <!-- <input type="submit" value=""> -->
                    </div>
                </div>
            </div>
        </div>
    </form>

<!-- 
    <form action="./forget_pass.php" method="post" enctype="multipart/form-data " id="reset_pass" style="display: none;">
        <div class=" container">
            <div class="loginbox">

                <div class="content row">
                    <p class="text-center col-12 fs-2"><strong>Welcome to E-commerce website || Are you have forgoted your password ?</strong></p>
                    <div class="main-section col-12">
                        <p>please give the information bellow to reset your password</p>
                        <img src="img/ecom-web-logo.png" class="text-center m-center" alt="" width="100px" style="border-radius: 10px;" srcset=""><br>

                        <input type="password" name="user_new_pas" class="text-center custom-m-left" placeholder="reset your password" required><br>
                        <button type="submit" name="reset" class="btn btn-danger text-center">submit</button><br><br>
                        <p>Dont have a account? Please <a href="signup.php"> Signup </a> to create your account</p>

                        <!-- <input type="submit" value=""> -->
                    </div>
                </div>
            </div>
        </div>
    </form> -->
    <!-- admin login section ends here -->

    <?php

$loggedin = false;

include "assets/_db_connect.php";
if (isset($_POST['submit'])) {
    // echo 'posted';
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    // $get_pass =$_POST['adm_user_pas'];
    // $user_password =$_POST['user_pas'];
    // $hash = password_hash($get_pass, PASSWORD_DEFAULT);
    // $admin_password = $hash;
    // echo $admin_password;

    $sql = "SELECT * FROM `users` WHERE `username` = '$user_name' AND `user_email` = '$user_email';";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo 'query runs <br>';
        // echo ' <script>document.getElementById("forget_pass_vari").style = "display:none !important;"</script>';
        // echo ' <script>document.getElementById("reset_pass").style = "display:inline !important;"</script>';
        echo ' <script>document.getElementById("user_name").style = "display:none !important;"</script>';
        echo ' <script>document.getElementById("user_name").style = "display:none !important;"</script>';
        echo ' <script>document.getElementById("reset_pass").style = "display:inline !important;"</script>';








        // if (isset($_POST['reset'])) {
        //     $new_pass = $_POST['user_new_pas'];
        //     $sql = "UPDATE `users` SET `password` = '$new_pass' WHERE `username` = '$user_name' AND `user_email` = '$user_email';";

        //     $result = mysqli_query($conn, $sql);
        //     if ($result) {
        //         echo 'updated the password';
        //     } else {
        //         echo ' cannot updated the password';
        //     }
        // }
    }
    else{
        echo 'reset not run';
    }
}
// else{
//     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//     <strong>Error!</strong> Please give correct username and password to login.
//     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//   </div>';
// }



?>









    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>