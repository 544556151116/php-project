<?php
include('config.php');

$ID = $_GET['id'];
$up = mysqli_query($con,"select * from prod where id = $ID" );
$data = mysqli_fetch_array($up);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> validation   </title>
    <link rel="stylesheet" href="shop.css">
</head>
<body>
    <center>
        <div class="val">
        <form action="insert_card.php" method="post">
            <h2>Do you really want to buy the product?</h2>
            <input type="text" name="id" value="<?php echo $data['id']?>">
            <input type="text" name="name" value="<?php echo $data['name']?>">
            <input type="text" name="price" value="<?php echo $data['price']?>">
            <button name="add" type="submit" class="ss">confirm</button>
            <br>
            <a href="shop.php">return to shop</a>
            </form>
        </div>




    </center>



</body>
</html>