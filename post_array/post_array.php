<!--Developed by Frankline Bwire Omondi-->
<!--© Notchcom Solutions Kenya -->
<!-- Multiple inputs with same name through POST in php -->

<!DOCTYPE html>
<html>
<head><title>Arrays</title></head>
    <body>
    <form method="post" action="post_array.php">
        <label>Name 1</label>
        <input type="text" name="names[]">
        <label>Name 2</label>
        <input type="text" name="names[]">
        <label>Location 1</label>
        <input type="text" name="location[]">
        <label>Location 2</label>
        <input type="text" name="location[]">
     
        <button type="submit" name="submit">Submit</button>
        </form>
    </body>
</html>

 
<?php 
if(isset($_POST["submit"])){
    
$name1=$_POST["names"][0];
$name2=$_POST["names"][1];
$location1=$_POST["location"][0];
$location2=$_POST["location"][1];
    
    echo "First name is: <strong>".$name1."</strong> and second name is: <strong>".$name2."</strong> While your first location is: <strong>".$location1."</strong> and your second location is: <strong>".$location2."</strong>.";
    
};
?>