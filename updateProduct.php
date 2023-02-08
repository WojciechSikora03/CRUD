<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<a href="products.php">Powrót</a>
    <?php
    $user = 'root';
    $password = '';
    $host = 'localhost';
    $database = 'sklep';

    $conn = new mysqli($host, $user, $password, $database);

    if (isset($_POST['updBtn'])) {
        $id = $_POST['productsToUpdate'];
        $name = $_POST['productsName'];
        $price = $_POST['productsPrice'];
        $count = $_POST['productsCount'];
        $updateSql = "UPDATE `products` SET `name`='".$name ."', `price`='".$price
            ."', `count`=". $count . " WHERE id=". $id;
        $conn->query($updateSql);

    }
    echo "<h2> Zaaktualizowano produkt </h2>"
    ?>
</body>
</html>

