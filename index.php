<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online shop</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>Online Marketing Site</h2>
                <img src="OIP.jpeg" alt="logo">
                <br>
                <input type="text" placeholder="name" name="name">
                <br>
                <input type="text" placeholder="price" name="price">
                <br>
                <input type="file" id="file" name="image" style="display: none;">
                <label for="file">Upload image</label>
                <button name="upload">upload product</button>
                <br> <br>
                <a href="products.php">show all products</a>
            </form>


        </div>

        <p>Developer By Mostafa</p>

    </div>

    
</body>
</html>