<?php include('admin_server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
        
  	<h2>Admin Login</h2>
  </div>
	 
  <form method="post" action="admin_login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not an admin? <a href="register.php">Create new admin</a>
  	</p>
  </form>
    </body>
</html>