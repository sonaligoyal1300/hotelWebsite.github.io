<?php
$con = mysqli_connect('localhost', 'root', '','login');
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$sql ="INSERT into 'register' (username, password, email)
VALUES ('$username', '" . md5($password) . "', '$email');
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "
  <h3>You are registered successfully.</h3></br>
  
  ";
}
else{
  echo "invalid";
}

?>