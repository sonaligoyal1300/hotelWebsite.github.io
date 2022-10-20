<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>error</title>
  <style>
    	.container {
  margin: auto;
  max-width: 1100px;
  overflow: auto;
  padding: 0 20px;
}
/* Navbar */
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
    *{
    transition: all 0.6s;
}

html {
    height: 100%;
}

body{
    font-family: 'Lato', sans-serif;
    color: #888;
    margin: 0;
}

#main{
    display: table;
    width: 100%;
    height: 100vh;
    text-align: center;
}

.fof{
	  display: table-cell;
	  vertical-align: middle;
}

.fof h1{
	  font-size: 50px;
	  display: inline-block;
	  padding-right: 12px;
	  animation: type .5s alternate infinite;
}

@keyframes type{
	  from{box-shadow: inset -3px 0px 0px #888;}
	  to{box-shadow: inset -3px 0px 0px transparent;}
}
    </style>
</head>
<body>
<nav id="navbar">
            <div class="container">
                <h1 class="logo"> <a href="login.php">HBT</a></h1>
                <ul>
				    
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="register.php">Sign Up</a></li>
                </ul>
            </div>
</nav>
</body>
</html>

<div id="main">
    	<div class="fof">
        		<h1>Invalid Login</h1>
    	</div>
</div>