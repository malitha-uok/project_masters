<!doctype html>
<?php
$db=mysqli_connect("localhost","root","","hall_management"); //Create connection
 session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT NIC FROM register WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
     
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
		 
      }
   }
?>
<html>
<head>
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="split left">
  <div>
    <img src="image1.jpg" alt="Faculty of Science">
  </div>
</div>

<div class="split right">
  <div class="centered">
    <form action="" method="POST">
		<input type="text" name="username" placeholder="User Name">
    	<input type="password" name="password" placeholder="Password">
		<input type="submit" value="Submit">
    </form>
	<div style = "font-size:11px; color:#cc0000; margin-top:10px">
			   <?php  /*$error = "Your Username Name or Password is invalid";*/
						echo $error; ?></div>
	<p class="login"><i>Don't you have an account?</i><a href="register.html"> Register Here</a></p>
  </div>
</div>
</body>
</html>
