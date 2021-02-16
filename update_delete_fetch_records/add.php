<?php
include_once'config.php';
?>
<?php
if(isset($_POST['submit']))
{
    $username=$_POST['UserName'];
    $email=$_POST['Email'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $sql="INSERT INTO `users` (`id`, `username`, `email`, `gender`, `city`) VALUES (NULL, '$username', '$email', '$gender', '$city')";
     mysqli_query($conn,$sql);
}
else{
   echo "please click on submit button ...";
}
?>
<!DOCTYPE html>
<html>
<body>   
<form action="add.php" method="post">
<label>UserName:</label><br>
<input type="text" name="UserName" required><br>
<label>E-Mail:</label><br>
<input type="email" name="Email" required><br>
<label>Gender:</label><br>
<input type="radio" id="male" name="gender" value="male" required>
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female" required>
<label for="female">Female</label><br>
<label>City:</label><br>
<select name="city" required>
    <option value="Dehradun">Dehradun</option>
    <option value="Pune">Pune</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Bihar">Bihar</option>
    <option value="Maharastra">Maharastra</option>
    <option value="Chennai">Chennai</option>
    <option value="Jaipur">jaipur</option>
    <option value="Punjab">Punjab</option>
    <option value="Delhi">Delhi</option>
    <option value="Other">Other</option>
</select><br>
<input type="submit" name="submit" >
</form>
</body>
</html>
<?php
?>