<?php 
session_start();
if(!isset($_SESSION['admin_username'])){

//    echo 'logged in';
   header("location:login.php");

}






?>