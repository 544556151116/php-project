<?php
include('config.php');

if(isset($_POST['update'])) {
    $ID =$_POST['id'];
    $NAME  = $_POST['name']; 
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/" . $image_name;
    $update = "UPDATE prod SET name='$NAME' ,price='$PRICE' , image ='$image_up' where id =$ID  ";
    mysqli_query($con, $update);

    if(move_uploaded_file($image_location, 'images/' . $image_name)) {
        echo "<script>alert('File updated correctly')</script>";
    } else {
        echo "<script>alert('Problem: File not updated correctly')</script>";
    }
    
    header('location:index.php');
}
?>
