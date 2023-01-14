<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Products</title>
    <link href="cssphp.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>

    <main>
        <div class="body">

            <div class="body__header">
                Delete Products
            </div>

            <div class="body__form">
                <form action="" method="post" class="form" enctype="multipart/form-data">
                
                    <div class="form__row">
                        <label class="form__label" for="addID">ID</label>
                        <input class="form__input" type="text" name="addID" value="" id="addID" placeholder="ID Product" />
                    </div>
                    <div class="form__row form__footer">
                        <input type="submit" name="delete" value="Delete Product" class="form__row--btn" />
                    </div>
                
                </form>
            </div>

        </div>
    </main>

    <?php
    $conn = new mysqli('localhost', 'root', '', 'websitefgear');
    if (isset($_POST['delete'])) {
        $id = $_POST['addID'];
        if (!empty($id)) {
            try {
                $sql = "DELETE FROM products WHERE p_ID = '$id'";

                $cmd = mysqli_query($conn, $sql);

                if ($cmd == true) {
                    echo "<script>alert('Delete product information successfully!')</script>";
                } else {
                    echo "<script>alert('Delete failed product information')</script>";
                }
            } catch (Exception $e) {
                echo "<script>alert('Error~!')</script>";
            }
        } else {
            echo "<script>alert('Please enter ID Product~!')</script>";
        }
    }
    ?>
    <div class="server_flex">
        <a class="server" href="fgear.php">Back to home page</a>
        <a class="server" href="add_product.php">Back add products page</a>
        <a class="server" href="update.php">Back to update products page</a>
    </div>
</body>

</html>