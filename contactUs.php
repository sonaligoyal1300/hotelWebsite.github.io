<html>
<head>
<link rel="stylesheet" href="contact.css" type="text/css" media="all" />
<style>



</style>


</head>
<body>

<h2>Contact Us</h2>
  
  <form class="form" action="contactData.php" method="POST">
    
    <p class="username">
      <input type="text" name="name" id="name" placeholder="Enter your name" >
      
    </p>
    
    <p class="useremail">
      <input type="text" name="email" id="email" placeholder="mail@example.com" >
   
    </p>
    
    <p class="usercontact">
      <input type="text" name="contact" id="contact" placeholder="contact no." >

    </p>    
  
    <p class="usertext">
      <textarea name="text" placeholder="Write something to us" ></textarea>
                        
    </p>
    
    <p class="usersubmit">
      <input type="submit" name="submit" value="Send" >
    </p>
  </form>
  <form  class="usersubmit" name="form1" method="post" action="login.php">
  <label>
  <input name="submit2" type="submit" id="submit2" value="Log out">
  </label>
</form>
</body>
</html>