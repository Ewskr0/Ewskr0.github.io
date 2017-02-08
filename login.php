<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

   $myusername = mysqli_real_escape_string($db,$_POST['username']);
   $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

   $sql = "SELECT UserNameID FROM UserName WHERE userName = '$myusername' and pass = '$mypassword'";
   $result = mysqli_query($db,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $active = $row['active'];

   $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>

<head>
 <meta charset="UTF-8">
 <title>Login</title>
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