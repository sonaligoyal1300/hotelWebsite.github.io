<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
		/* .container {
  margin: auto;
  max-width: 1100px;
  overflow: auto;
  padding: 0 20px;
} */

#navbar {
  background: #333;
  color: #fff;
  overflow: auto;
}

#navbar a {
  color: #fff;
}

#navbar h1 {
  float: left;
  padding-top: 20px;
}

#navbar ul {
  list-style: none;
  float: right;
}

#navbar ul li {
  float: left;
}

#navbar ul li a {
  display: block;
  padding: 20px;
  text-align: center;
}

#navbar ul li a:hover, 
#navbar ul li a.current {
  background: #444;
  color: #f7c08a;
}
a {
  color: #333;
  text-decoration: none;
}
	</style>

</head>
<body>
<nav id="navbar">
            <div class="container">
                <h1 class="logo"> <a href="login.php">HBT</a></h1>
                <ul>
				   
                    
                </ul>
            </div>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>