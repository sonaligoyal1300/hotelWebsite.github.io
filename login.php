<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  
 <style>
  body {
  background-color: #9f9da7;
  font-size: 1.6rem;
  font-family: "Open Sans", sans-serif;
  color: #2b3e51;
}

h2 {
  font-weight: 300;
  text-align: center;
}

p {
  position: relative;
}

a,
a:link,
a:visited,
a:active {
  color: #3ca9e2;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
a:focus, a:hover,
a:link:focus,
a:link:hover,
a:visited:focus,
a:visited:hover,
a:active:focus,
a:active:hover {
  color: #329dd5;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
}

#login-form-wrap {
  background-color: #fff;
  width: 35%;
  margin: 30px auto;
  text-align: center;
  padding: 20px 0 0 0;
  border-radius: 4px;
  box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);
}

#login-form {
  padding: 0 60px;
}

input {
  display: block;
  box-sizing: border-box;
  width: 100%;
  outline: none;
  height: 60px;
  line-height: 60px;
  border-radius: 4px;
}

input[type="text"],
input[type="email"] {
  width: 100%;
  padding: 0 0 0 10px;
  margin: 0;
  color: #8a8b8e;
  border: 1px solid #c2c0ca;
  font-style: normal;
  font-size: 16px;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  position: relative;
  display: inline-block;
  background: none;
}
input[type="text"]:focus {
  border-color: #3ca9e2;
}
input[type="text"]:focus:invalid {
  color: #cc1e2b;
  border-color: #cc1e2b;
}
input[type="text"] {
  display: block;
  border-color: #0C0;
}
input[type="text"] span {
  background: #0C0;
  position: absolute;
  border-radius: 6px;
}
input[type="text"]span:first-child,
input[type="email"] span:first-child {
  top: 30px;
  left: 14px;
  width: 20px;
  height: 3px;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}
input[type="text"] span:last-child,
input[type="email"]span:last-child {
  top: 35px;
  left: 8px;
  width: 11px;
  height: 3px;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}

.validation {
  display: none;
  position: absolute;
  content: " ";
  height: 60px;
  width: 30px;
  right: 15px;
  top: 0px;
}

input[type="submit"] {
  border: none;
  display: block;
  background-color: #3ca9e2;
  color: #fff;
  font-weight: bold;
  text-transform: uppercase;
  cursor: pointer;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
  font-size: 18px;
  position: relative;
  display: inline-block;
  cursor: pointer;
  text-align: center;
}
input[type="submit"]:hover {
  background-color: #329dd5;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
}

#create-account-wrap {
  background-color: black;
  color:white;
  font-size: 14px;
  width: 100%;
  padding: 10px 0;
  border-radius: 0 0 4px 4px;
}
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

  </style>


</head>
<body>
<nav id="navbar">
            <div class="container">
                <h1 class="logo"> <a href="login.php">HBT</a></h1>
                <ul>
                    
                    <!-- <li><a href="login.php">Logout</a></li> -->
                </ul>
            </div>

<h2>Login</h2>
 
<div id="login-form-wrap">
  
  <form id="login-form" action="connection.php" method="post">
    <p>
    <input type="text" id="username" name="username" placeholder="Username" required><span></span><span></span></i>
    </p>
    <p>
    <input type="text" id="password" name="password" placeholder="Password" required><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" id="login" value="Login">
    </p>
  </form>
  <div id="create-account-wrap">
    <p>Not a member? <a href="register.php">Create Account</a><p>
  </div>
</div><
  
</body>
</html>
