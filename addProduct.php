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

        $name = $_POST['productName'];
        $price = $_POST['productPrice'];
        $count = $_POST['productsCount'];


        $insertsql = "INSERT INTO products VALUES (null, '$name', '$price', '$count')";

        $retval = $conn->query( $insertsql );

        echo "<h2> Pomyslnie dodano produkt</h2>";
    ?>
</body>
</html>


