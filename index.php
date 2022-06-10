<!DOCTYPE html>
<html>
<body>

<h2>Text input fields</h2>

<form method="POST" action="">
  <label for="name">First name:</label><br>
  <input type="text" id="fname" name="name" value=""><br>
  <label for="lname">Email:</label><br>
  <input type="text" id="lname" name="email" value=""><br>
  <label for="fname">Mobile:</label><br>
  <input type="number" id="fname" name="mobile" value=""><br>
  <input type="submit" name="submit" value="Submit">
</form>

<p>Note that the form itself is not visible.</p>

<p>Also note that the default width of text input fields is 20 characters.</p>

</body>
</html>

<?php
include 'connection.php';

if (isset($_POST['submit']))
{
 $name = $_POST['name'];  
 $email = $_POST['email']; 
 $mobile = $_POST['mobile'];  

 $insertquery = "INSERT INTO user (`name`, `email`, `mobile`) 
 VALUES ( '$name','$email','$mobile')";

 mysqli_query($con,$insertquery);

}
    ?>