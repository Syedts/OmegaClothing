<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <style>
  .btn{
  background-color: white;
      color: #404040;
      border: 1px solid rgb(3, 3, 3);
      font-size: 30px;
      transition: all 0.5s;
      cursor: pointer; }
	  
.btn:hover
{
  border: 1px solid rgb(252, 252, 252);

  opacity:.7;
  background-color: darkgray;
  color: white;
  
}
  .input-group{padding: 15px; text-align: center;}
  .title_header{
  	color: grey;
  font-size:30px;
  };
   </style>
<link rel="stylesheet" type="text/css" href="nav-menu.css">
</head>
<body  >
  <div class="header">
  	<h2 align="center" class="title_header">Register</h2>
	<hr>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
	<br>
	<br>
	
  	  <label  >Username:</label>
  	  <input  type="text" name="username" value="<?php echo $username; ?>">
	 
  	</div>
  	<div class="input-group">
  	  <label>Email:  </label>
  	  <input  type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password:  </label>
  	  <input style=" padding-left:-15px;" type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password: </label>
  	  <input type="password" name="password_2">
	  <br>
	  <br>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p align="center">
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
   <div injection-id-url-active="footer.html"></div>
</body>
</html>