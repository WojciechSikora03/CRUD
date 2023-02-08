<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<a href=workers.php>Powrót</a>
    <?php
    $user = 'root';
    $password = '';
    $host = 'localhost';
    $database = 'sklep';

    $conn = new mysqli($host, $user, $password, $database);

    if (isset($_POST['updBtn'])) {
        $id = $_POST['workersToUpdate'];
        $name = $_POST['workersName'];
        $surname = $_POST['workersSurname'];
        $salary = $_POST['workersSalary'];
        $age = $_POST['workersAge'];
        $updateSql = "UPDATE `workers` SET `name`='".$name ."', `surname`='".$surname
            ."', `salary`=". $salary . ", `age`=". $age . " WHERE id=". $id;
        $conn->query($updateSql);
    }
    echo "<h2> Zaaktualizowano pracownika </h2>"
    ?>
</body>
</html>

