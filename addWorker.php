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

    $name = $_POST['workersName'];
    $Surname = $_POST['workersSurname'];
    $salary = $_POST['workersSalary'];
    $age = $_POST['workersAge'];


    $insertsql = "INSERT INTO workers VALUES (null, '$name', '$Surname', '$salary', '$age')";

    $retval = $conn->query( $insertsql );

    echo "<h2> Pomyslnie dodano pracownika</h2>";
?>

</body>
</html>



