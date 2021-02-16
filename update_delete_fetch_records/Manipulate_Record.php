<!DOCTYPE html>
<html>
<body> 
    <?php
    include_once('config.php');
    ?>
    <?php
    if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $sql=" SELECT * FROM `users` WHERE `username`='$username' ";
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
    <th>Edit</th>
    <th>Delete</th>
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
    <td><a href="Edit.php?id=<?php echo $row['id']?>"><input type="button" value="Edit"></a></td>
    <td><input type="button" value="delete" onclick="del(<?php echo $row['id']?>)"></a></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    <?php } 
    }?>
    <script>
function del( id)
{
    if(confirm('Are you sure that you want to delete the row'))
    return window.location.replace('delete.php?id='+id);
    else return window.location.replace('details_user.php') ;
}
</script>

<form action="Manipulate_Record.php" method="post">
<label>Username:</label><br>
<input type="text" name="username" required><br>
<input type="submit" name="submit" >
</form>
</body>
</html>