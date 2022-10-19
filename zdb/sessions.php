<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from user_details where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
    if(!isset($_SESSION['login_user'])){
        header("location:login.php");
        die();
    }
    else{
        $type = $_SESSION['login_usertype'];
        if(str_contains($_SERVER['REQUEST_URI'], $type))
        {}else{
            header("location: ../$type/dashboard.php");
        }
    }
?>