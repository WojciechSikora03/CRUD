<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <a href="index.php">Powrót</a>
        <?php
    $user = 'root';
    $password = '';
    $host = 'localhost';
    $database = 'sklep';

    $conn = new mysqli($host, $user, $password, $database);

    if(isset($_POST['delBtn'])) {
        $customerToDelete = $_POST['customerToDelete'];
        $deleteSql = "DELETE FROM customers WHERE id=". $customerToDelete;
        $conn->query($deleteSql);
    }


    echo "<h2> Pomyslnie usunięto klienta</h2>";
    ?>
</body>
</html>



