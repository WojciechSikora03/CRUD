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

    if(isset($_POST['delBtn'])) {
        $productToDelete = $_POST['productToDelete'];
        $deleteSql = "DELETE FROM products WHERE id=". $productToDelete;
        $conn->query($deleteSql);
    }


    echo "<h2> Pomyslnie usunięto produkt</h2>";
    ?>
</body>
</html>

