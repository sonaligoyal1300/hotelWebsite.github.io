<?php 
  //creating connection to database
$con=mysqli_connect("localhost","root","","login") or die(mysqli_error());

  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$Name = $con->real_escape_string($_POST['name']);
$Email = $con->real_escape_string($_POST['email']);
// $Phone = $con->real_escape_string($_POST['contact']);
$message = $con->real_escape_string($_POST['message']);

  //query to insert the variable data into the database
$sql="INSERT INTO contactdata (name, email, message) VALUES ('".$Name."','".$Email."', '".$message."')";

  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else

header('location: Thankyou.php');
}

?>