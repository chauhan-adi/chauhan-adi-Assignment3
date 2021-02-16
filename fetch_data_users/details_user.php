<!DOCTYPE html>
<html>
<head>
<title>Details_Users</title>
</head>
<body>
<?php
include('config.php');
?>
<?php 
if(isset ($_POST['Update']))
{
    $id=$_GET['id'];
$usernameu=$_POST['username'];
$emailu=$_POST['email'];
$genderu=$_POST['gender'];
$cityu=$_POST['city'];
$sqla="UPDATE `users`
SET `username`= '$usernameu',`email`= '$emailu',`gender`='$genderu',`city`='$cityu'
WHERE `id`= '$id'";
mysqli_query($conn,$sqla);
}


?>
<?php
$sql=" SELECT * FROM `users` ";
$result=mysqli_query($conn,$sql);

if ( $result->num_rows > 0) {
?>
<table  border= 1px>
<thead>
<tr>

<th>Username</th>
<th>Email</th>
<th>Gender</th>
<th>City</th>
</tr>
</thead>
<tbody>

<?php
while(
$row=$result->fetch_assoc() ){?>
    <tr>
<td><?php echo $row['username']?></td>
<td><?php echo $row['email']?></td>
<td><?php echo $row['gender']?></td>
<td><?php echo $row['city']?></td>
</tr>
<?php } ?>
</tbody>
</table>
<?php } 
else{ echo "The database is empty!";
}?>
</body>
</html>


