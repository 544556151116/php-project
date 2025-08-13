<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update product</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<?php
include('config.php');
$ID = $_GET['id'];
$up = mysqli_query($con, "SELECT * FROM prod WHERE id = $ID");
$data = mysqli_fetch_array($up);

?>

    <div>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>Update product</h2>

                <input type="text"  name="id" value="<?php echo $data['id']; ?>">
                <br>
                <input type="text"  name="name" value="<?php echo $data['name']; ?>">
                <br>
                <input type="text"  name="price" value="<?php echo $data['price']; ?>">
                <br>
                <input type="file" id="file" name="image" style="display: none;">
                <label for="file">Update photo</label>
                <button name="update" type="submit">Update product</button>
                <br><br>
                <a href="products.php">Show all products</a>
            </form>
        </div>

        <p>Developer By Mostafa</p>
    </div>


</body>
</html>
