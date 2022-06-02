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
  padding:10px;
  
}
  .input-group{padding:15px; text-align: center;}
  .title_header{
  	color: grey;
  font-size:30px;
  };
  
  
  </style>
</head>
<body>
  <div class="header">
  	<h2 align="center" class="title_header">Login</h2>
  </div>
	 
  <form method="post" action="login.php">
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
  	<p align="center" >
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  <br>
  <br>
  
  <hr>
</body>
</html>