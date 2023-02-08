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

    if (isset($_POST['updBtn'])) {
        $id = $_POST['customerToUpdate'];
        $name = $_POST['customerName'];
        $surname = $_POST['customerSurname'];
        $phoneNr = $_POST['customerNr'];
        $updateSql = "UPDATE `customers` SET `name`='".$name ."', `surname`='".$surname
            ."', `phone_number`=". $phoneNr . " WHERE id=". $id;
        $conn->query($updateSql);
    }
    echo "<h2> Zaaktualizowano klienta </h2>"
    ?>
</body>
</html>