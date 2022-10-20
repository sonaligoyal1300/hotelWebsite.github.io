<?php
$con = mysqli_connect('localhost', 'root', '','login');
$username = $_POST['username'];
$password = $_POST['password'];
$sql ="select * from  register where username= '$username' && password='$password'";
$rs = mysqli_query($con, $sql);
if($rs->num_rows > 0)
{
	// echo "Logged in";
  header('location: index.html');
}

else{
  header('location: error.php');
}

?>