<?php
$conn = new mysqli("localhost", "root", "",  "sklep" );

$sql = "SELECT `id`, `name`, `surname`, `phone_number` FROM `customers`";
$retval = $conn->query($sql);
$arrayData = $retval->fetch_all();

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>shop</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Customers</h1>
    <div id="navbar">
        <a href="products.php">Products</a>
        <a href="workers.php">Workers</a>
    </div>
    <div id="buttons">
        <button id="delBtn">DELETE  </button>
        <button id="addBtn">ADD  </button>
        <button id="updBtn">UPDATE  </button>
    </div>
    <div id="table">
        <?php
        $data = "SELECT * FROM `customers`";
        $retval = $conn->query($data);
        while ($row = $retval->fetch_row()) {
            echo ' <div><tr><td> '.$row[1].' '.$row[2].' '.$row[3].' </td></tr></div>';
        }
        ?>
    </div>
    <div id="forms">
        <div id="adding" class="forms" style="display:none;">
            <form action="addCustomer.php" method="post">
                <div><label>Name</label><input type="text" name="customerName"></div>
                <div><label>Surname</label><input type="text" name="customerSurname"></div>
                <div><label>Phone Number</label><input type="number" name="customerNr"></div>
                <div><input type="submit" value="Add" name="addBtn"></div>
            </form>
        </div>
    <div id="deleting"  class="forms" style="display:none;">
        <form action="deleteCustomer.php" method="post">
            <select name="customerToDelete">
                <?php
                for ($i = 0; $i < count($arrayData); $i++){
                    echo '<option value="' . $arrayData[$i][0] . '"> ' . $arrayData[$i][0] . ' ' . $arrayData[$i][1] . ' ' . $arrayData[$i][2]. ' </option>';
                }
                ?>
            </select>

            <div><input type="submit" value="Delete" name="delBtn"></div>
        </form>
    </div>
        <div id="updating" class="forms" style="display:none;">
            <form action="updateCustomer.php"  method="post">
                <select name="customerToUpdate">
                    <?php
                        for ($i = 0; $i < count($arrayData); $i++){
                            echo '<option value="' . $arrayData[$i][0] . '"> ' . $arrayData[$i][0] . ' ' . $arrayData[$i][1] . ' ' . $arrayData[$i][2]. ' </option>';
                        }
                    ?>
                </select>
                <div><label>Name</label><input type="text" name="customerName"></div>
                <div><label>Surname</label><input type="text" name="customerSurname"></div>
                <div><label>Phone Number</label><input type="number" name="customerNr"></div>
                <div><input type="submit" value="Update" name="updBtn"></div>
            </form>
        </div>
    </div>

</body>
</html>
