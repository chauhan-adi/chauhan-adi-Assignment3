  <?php
    include('config.php');
        if(!empty($_GET['id'])){
         $id=$_GET['id'];
        $sql="DELETE FROM `users` WHERE `users`.`id` = $id";
          $result=mysqli_query($conn,$sql);
        }
        header("Location:details_user.php");
    ?>
 
 
      