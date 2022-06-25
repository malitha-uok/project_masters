<!doctype html>
  <?php
   include('session.php');
	?>
<html>
<head>
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="split left">
  <div>
    <img src="" alt="">
  </div>
</div>

<div class="split right">
  <div class="centered">
      <h2>Hi .. <?php echo $login_session; ?> &nbsp;&nbsp;&nbsp; Welcome to <i>Admin Panel</i><br><br>
	  Now You can Update or Delete the relevant records</h2> 
	  <h3><a href = "update_delete.php">Update or Delete records</a></h3>
      <h3><a href = "logout.php">Sign Out</a></h3>
  </div>
</div>
</body>
</html>
