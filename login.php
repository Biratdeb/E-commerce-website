<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login || E-commerce website</title>
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
            height: 460px;
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

    $loggedin = false;

    include "assets/_db_connect.php";
    if(isset($_POST['submit'])){
        // echo 'posted';
        $username = $_POST['user_name'];
        // $get_pass =$_POST['adm_user_pas'];
        $user_password =$_POST['user_pas'];
        // $hash = password_hash($get_pass, PASSWORD_DEFAULT);
        // $admin_password = $hash;
        // echo $admin_password;

        $sql = "SELECT * FROM `users` WHERE `username` = '$username';";
        $result = mysqli_query($conn, $sql);

        if($result){
            // echo 'query runs <br>';
            if(mysqli_num_rows($result)>0){
                // echo password_verify($admin_password, $row['admin_password']);

                while($row = mysqli_fetch_assoc($result)){
                    // echo '<br>username <br>'. $row['admin_username'];
                //    echo password_verify($admin_password, $row['admin_password']);
                   
             $varift =  (password_verify($user_password, $row['password']));
             $db_pass = $row['password'];
             if($varift == $db_pass){
                echo 'password matched';
                session_start();
                $_SESSION['username'] = $username;
                // this is for getting the email from the logged in user
                $_SESSION['user_email'] =  $row['user_email'];
                $_SESSION['user_phone_no'] =  $row['phone_no'];
                $time = $row['datetime'];
                $time_to_str = strtotime($time);
                $joined_in = date('h:i:sa d-m-y', $time_to_str);
                $_SESSION['user_joined_in'] =  $joined_in;
                $_SESSION['user_id'] = $row['user_id'];
                
                header("location: users/us_dashboard.php");
             }
                
                
                
                // if(password_verify($admin_password, $row['admin_password'])){
                    //     // echo '<br> password varified <br>';
                    //     session_start();
                    //     $_SESSION['admin_username'] = $admin_name;
                    //     $loggedin = true;
                    //     header("location: admin_dashboard.php");
                    // }
                    else{
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> Please give correct password to login.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                    }
                }
               
                
                



                // SELECT * FROM `admin_users` WHERE `admin_username` = 'joy baba loknath' AND `admin_password` = 'joy baba loknath' ORDER BY `admin_username` DESC

            }
            else{
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Please give correct username to login.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Please give correct username to login.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    }
    // else{
    //     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //     <strong>Error!</strong> Please give correct username and password to login.
    //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //   </div>';
    // }
    
    
    
    ?>




    
    <!-- admin login section starts here -->
    <form action="./login.php" method="post" enctype="multipart/form-data ">
    <div class=" container">
        <div class="loginbox">
            
            <div class="content row">
                <p class="text-center col-12 fs-2"><strong>Welcome to E-commerce website || Login with your user account   </strong></p>
                <div class="main-section col-12">
                <img src="img/ecom-web-logo.png" class="text-center m-center" alt="" width="100px" style="border-radius: 10px;" srcset=""><br>
                <input type="text" name="user_name" id=""class="text-center custom-m-left" placeholder="your username" required><br>
                <input type="password" name="user_pas" id=""class="text-center custom-m-left" placeholder="your password" required><br>
                <button type="submit" name="submit" class="btn btn-danger text-center">login</button><br><br>
                <p>Don't have a account? Please <a href="signup.php"> Signup </a> to create your account</p>
                <p>I have<a href="forget_pass.php">  forgoted  </a> my password</p>
                <!-- <input type="submit" value=""> -->
            </div>
            </div>
        </div>
    </div>
    </form>
    
    <!-- admin login section ends here -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>