<?php
$conn = new mysqli("localhost", "root", "",  "sklep" );

$sql = "SELECT `id`, `name`, `price`, `count` FROM `products`";
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
        <h1>Products</h1>
        <div id="navbar">
            <a href="index.php">Customers</a>
            <a href="Workers.php">Workers</a>
        </div>
        <div id="buttons">
            <button id="delBtn">DELETE  </button>
            <button id="addBtn">ADD  </button>
            <button id="updBtn">UPDATE  </button>
        </div>
        <div id="table">
            <?php
            $data = "SELECT * FROM `products`";
            $retval = $conn->query($data);
            while ($row = $retval->fetch_row()) {
                echo ' <div><tr><td> '.$row[1].' '.$row[2].' '.$row[3].' </td></tr></div>';
            }
            ?>
        </div>
        <div id="forms">
            <div id="adding" class="forms" style="display:none;">
                <form action="addProduct.php" method="post">
                    <div><label>Name</label><input type="text" name="productName"></div>
                    <div><label>Price</label><input type="text" name="productPrice"></div>
                    <div><label>Count</label><input type="number" name="productsCount"></div>
                    <div><input type="submit" value="Add" name="addBtn"></div>
                </form>
            </div>
            <div id="updating" class="forms" style="display:none;">
                <form action="updateProduct.php" method="post">
                    <select name="productsToUpdate">
                        <?php
                        for ($i = 0; $i < count($arrayData); $i++){
                            echo '<option value="' . $arrayData[$i][0] . '"> ' . $arrayData[$i][0] . ' ' . $arrayData[$i][1] . ' ' . $arrayData[$i][2]. ' </option>';
                        }
                        ?>
                    </select>
                    <div><label>Name</label><input type="text" name="productsName"></div>
                    <div><label>Price</label><input type="text" name="productsPrice"></div>
                    <div><label>Count</label><input type="number" name="productsCount"></div>
                    <div><input type="submit" value="Update" name="updBtn"></div>
                </form>
            </div>
            <div id="deleting" class="forms" style="display:none;">
                <form action="deleteProduct.php" method="post">
                    <select name="productToDelete">
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
