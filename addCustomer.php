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

        $name = $_POST['customerName'];
        $surname = $_POST['customerSurname'];
        $phone = $_POST['customerNr'];


    $insertsql = "INSERT INTO customers VALUES (null, '$name', '$surname', '$phone')";

    $retval = $conn->query( $insertsql );

    echo "<h2> Pomyslnie dodano klienta</h2>";
    ?>
</body>
</html>



