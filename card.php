<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My product</title>
    <link rel="stylesheet" href="shop.css">
</head>
<body>
    <h3 class="hh">Reserved Products</h3>
    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM add_card");
    echo '
    <center>
        <main>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Product name</th>
                        <th scope="col">Product price</th>
                        <th scope="col">Delete product</th>
                    </tr>
                </thead>
                <tbody>';
    while ($row = mysqli_fetch_array($result)) {
        echo '
                    <tr>
                        <td>' . $row['name'] . '</td>
                        <td>' . $row['price'] . '</td>
                        <td><a href="del_card.php?id=' . $row['id'] . '" class="btn btn-danger">Delete</a></td>
                    </tr>';
    }
    echo '
                </tbody>
            </table>
        </main>
    </center>';
    ?>
    <center>
        <a href="shop.php">return to shop</a>
    </center>
</body>
</html>
