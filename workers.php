<?php
$conn = new mysqli("localhost", "root", "",  "sklep" );

$sql = "SELECT `id`, `name`, `surname` FROM `workers`";
$retval = $conn->query($sql);
$arrayData = $retval->fetch_all();

?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>shop</title>
        <script src="script.js" defer></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Workers</h1>
        <div id="navbar">
            <a href="index.php">Customers</a>
            <a href="products.php">Products</a>
        </div>
        <div id="buttons">
            <button id="delBtn">DELETE  </button>
            <button id="addBtn">ADD  </button>
            <button id="updBtn">UPDATE  </button>
        </div>
        <div id="table">
            <?php
            $data = "SELECT * FROM `workers`";
            $retval = $conn->query($data);
            while ($row = $retval->fetch_row()) {
                echo ' <div><tr><td> '.$row[1].' '.$row[2].' '.$row[3].' '.$row[4].' lat </td></tr></div>';
            }
            ?>
        </div>
        <div id="forms">
            <div id="adding" class="forms" style="display:none;">
                <form action="addWorker.php" method="post">
                    <div><label>Name</label><input type="text" name="workersName"></div>
                    <div><label>Surname</label><input type="text" name="workersSurname"></div>
                    <div><label>Salary</label><input type="text" name="workersSalary"></div>
                    <div><label>Age</label><input type="number" name="workersAge"></div>
                    <div><input type="submit" value="Add" name="addBtn"></div>
                </form>
            </div>
            <div id="updating" class="forms" style="display:none;">
                <form action="updateWorker.php" method="post">
                    <select name="workersToUpdate">
                        <?php
                        for ($i = 0; $i < count($arrayData); $i++){
                            echo '<option value="' . $arrayData[$i][0] . '"> ' . $arrayData[$i][0] . ' ' . $arrayData[$i][1] . ' ' . $arrayData[$i][2]. ' </option>';
                        }
                        ?>
                    </select>
                    <div><label>Name</label><input type="text" name="workersName"></div>
                    <div><label>Surname</label><input type="text" name="workersSurname"></div>
                    <div><label>Salary</label><input type="text" name="workersSalary"></div>
                    <div><label>Age</label><input type="number" name="workersAge"></div>
                    <div><input type="submit" value="Update" name="updBtn"></div>
                </form>
            </div>
            <div id="deleting" class="forms" style="display:none;">
                <form action="deleteWorkers.php" method="post">
                    <select name="workerToDelete">
                        <?php
                        for ($i = 0; $i < count($arrayData); $i++){
                            echo '<option value="' . $arrayData[$i][0] . '"> ' . $arrayData[$i][0] . ' ' . $arrayData[$i][1] . ' ' . $arrayData[$i][2]. ' </option>';
                        }
                        ?>
                    </select>
                    <div><input type="submit" value="Delete" name="delBtn"></div>
                </form>
            </div>
        </div>
    </body>
</html>
