<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <a href="workers.php">Powrót</a>
    <?php
    $user = 'root';
    $password = '';
    $host = 'localhost';
    $database = 'sklep';

    $conn = new mysqli($host, $user, $password, $database);

    if(isset($_POST['delBtn'])) {
        $workerToDelete = $_POST['workerToDelete'];
        $deleteSql = "DELETE FROM workers WHERE id=". $workerToDelete;
        $conn->query($deleteSql);

    }


    echo "<h2> Pomyslnie usunięto pracownika</h2>";
    ?>

</body>
</html>
