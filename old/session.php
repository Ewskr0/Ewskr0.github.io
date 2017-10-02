<?php
   include('connect.php');
   session_start();
   error_reporting(E_ALL ^ E_WARNING);
   
   $user_check = $_SESSION['login_user'];
   $userCheck = "SELECT username FROM `user` WHERE username = '$user_check' ";
   $ses_sql = mysqli_query($select_db,$userCheck);
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:/login.php");
   }
?>