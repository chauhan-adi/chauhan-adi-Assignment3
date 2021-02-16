<!DOCTYPE html>
<?php 
include('config.php');
if(!empty($_GET['id'])){
$id=$_GET['id'];
$sql=" SELECT * FROM `users` WHERE `id`='$id' ";
$result=mysqli_query($conn,$sql);
$row=$result->fetch_assoc();
$username=$row['username'];
$email=$row['email'];
$gender=$row['gender'];
$city=$row['city'];
if($gender=='male')
{
    $val='checked';
    $x='unchecked';
}
else{
    $val='unchecked';
    $x='checked';
}
}
else{
    echo "ID is null";
}
?>

<html>
<body>  
<?php if(!empty($id)){ ?> 
<form action="details_user.php?id=<?php echo $id?>" method="post" >
<label>UserName:</label><br>
<input type="text" name="username"  value=<?php echo $username ?> required><br>
<label>E-Mail:</label><br>
<input type="email" name="email" value=<?php echo $email ?> required><br>
<label>Gender:</label><br>
<input type="radio" id="male" name="gender" value="male" <?php echo $val ?> required>
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female" <?php echo $x ?> required>
<label for="female">Female</label><br>
<label>City:</label><br>
<select name="city" required>
<option value=<?php echo $city ?>><?php echo $city?></option>
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
<input type="submit" name="Update" value="Update">
</form>
<?php } ?>
</body>
</html>


