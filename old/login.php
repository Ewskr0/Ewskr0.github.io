<?php  //Start the Session
session_start();
require('connect.php');
$error="";
if (isset($_POST['username']) and isset($_POST['password'])){
   $username = $_POST['username'];
   $password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
   $query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
   
   $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
   $count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
   if ($count == 1){
      $_SESSION['login_user'] = $username;
      header('Location: index.php');

   }else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
      $error = "Invalid Login Credentials.";
   }
}
?>

<html>

<head>
  <meta charset="UTF-8">
  <title>WorkStation - Login</title>
  <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
   <div class="box">
    <form action = "" method = "post">
       <h1>Login</h1>
       <input type="text" placeholder="Username" name = "username"/>
       <input type="password" placeholder="Password" name = "password"/>
       <input type ="submit" value = " Submit "/><br />   
       <div class="error"><?php echo $error; ?></div> 
    </form>
 </div>





</body>
</html>