<!DOCTYPE html>
<html>
    <head>
        ADD TWO Numbers
    </head>
    <body>
 
        <form action="addno.php" method="post">
    <label>Enter the first number:</label><br>
<input type="number" name="first" required><br>
<label>Enter the second number:</label><br>
<input type="number" name="second" required><br>
<input type="submit" name="submit" >
        </form>
        <?php 
        if(isset($_POST['submit']))
        {
           $name1= $_POST['first'];
           $name2=$_POST['second'];
           $result=$name1+$name2;
           echo "The sum of two numbers is $result";
        }
        ?>
   
    </body>
</html>