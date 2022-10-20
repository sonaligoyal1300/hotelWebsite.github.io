<?php
 $username = $_POST['user'];
 $password = $_POST['pwd'];

//  $username = stripcslashes[$username];
//  $password = stripcslashes[$password];
//  $username = mysql_real_escape_string[$username];
//  $password = mysql_real_escape_string[$password];

//  mysql_connect("localhost", "root", "");
$mysqli = new mysqli("localhost", "root", "", "login");
//  mysql_select_db("login");
 $result = mysqli_query("select * from  users where username= '$username' && password='$password'")
                            or die("failed to query database". mysql_error());
 $row= mysqli_fetch_array($result);
 if($row['username'== $username && 'password' == $password]){
 echo "Login successful welcome" . $row['username'];}
 else{
  echo "Failed to login";
 }
 ?>




