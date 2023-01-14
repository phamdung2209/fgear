<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link href="cssphp.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <div class="body">

            <div class="body__header">
                Insert Products
            </div>

            <div class="body__form">
                <form action="" method="post" class="form" enctype="multipart/form-data">

                    <div class="form__row">
                        <label class="form__label" for="addID">ID</label>
                        <input class="form__input" type="text" name="addID" value="" id="addID"
                            placeholder="ID Product" />
                    </div>

                    <div class="form__row">
                        <label class="form__label" for="addName">Name</label>
                        <input class="form__input" type="text" name="addName" value="" id="addName"
                            placeholder="Name" />
                    </div>

                    <div class="form__row">
                        <label class="form__label" for="addDes">Description</label>
                        <input class="form__input" type="text" name="addDes" value="" id="addDes"
                            placeholder="Description" />
                    </div>

                    <div class="form__row">
                        <label class="form__label" for="addPrice">Price</label>
                        <input class="form__input" type="text" name="addPrice" value="" id="addPrice"
                            placeholder="Price" />
                    </div>

                    <div class="form__row">
                        <label class="form__label" for="addDiscount">Discount</label>
                        <input class="form__input" type="text" name="addDiscount" value="" id="addDiscount"
                            placeholder="Discount" />
                    </div>

                    <div class="form__row">
                        <label class="form__label" for="addSize">Size</label>
                        <input class="form__input" type="text" name="addSize" value="" id="addSize"
                            placeholder="Size" />
                    </div>

                    <div class="form__row">
                        <label class="form__label" for="addMaterial">Material</label>
                        <input class="form__input" type="text" name="addMaterial" value="" id="addMaterial"
                            placeholder="Material" />
                    </div>

                    <div class="form__row">
                        <label class="form__label" for="addColor">Color</label>
                        <input class="form__input" type="text" name="addColor" value="" id="addColor"
                            placeholder="Color" />
                    </div>

                    <div class="form__row">
                        <label class="form__label" for="addCategory">Category</label>
                        <input class="form__input" type="text" name="addCategory" value="" id="addCategory"
                            placeholder="Category" />
                    </div>

                    <div class="form__row">
                        <label class="form__label" for="addMenu">Menu</label>
                        <input class="form__input" type="text" name="addMenu" value="" id="addMenu"
                            placeholder="Menu" />
                    </div>

                    <div class="form__row">
                        <label class="form__label">Image</label>
                        <input type="file" name="product_img" />
                    </div>





                    <div class="form__row form__footer">
                        <input type="submit" name="add" value="Add Product" class="form__row--btn" />
                    </div>

                </form>
            </div>

        </div>
    </main>

    <?php

    $conn = new mysqli('localhost', 'root', '', 'websitefgear');
    if (isset($_POST['add'])) {

        $id = $_POST['addID'];
        $name = $_POST['addName'];
        $price = $_POST['addPrice'];
        $discount = $_POST['addDiscount'];
        $size = $_POST['addSize'];
        $material = $_POST['addMaterial'];
        $color = $_POST['addColor'];
        $category = $_POST['addCategory'];
        $menu = $_POST['addMenu'];

        $description = $_POST['addDes'];

        $product_img = $_FILES['product_img']['name'];

        if (!empty($id) && !empty($name) && !empty($price) && !empty($discount) && !empty($size) && !empty($material) && !empty($color) && !empty($category) && !empty($menu) && !empty($description) && !empty($product_img)) {

            try {
                $product_img_tmp = $_FILES['product_img']['tmp_name'];
                //Di chuyển file vào thư mục Image/DemoWebsite
                move_uploaded_file($product_img_tmp, "images_products/$product_img");


                $sql = "INSERT INTO products VALUES('$id','$name','$description','$price','$discount','$size','$material','$color','$category','$menu','$product_img')";

                $cmd = mysqli_query($conn, $sql);

                if ($cmd == true) {
                    echo "<script>alert('Thêm sản phẩm thành công') </script>";
                } else {
                    echo "<script>alert('Thêm sản phẩm thất bại') </script>";
                }
            } catch (Exception $e) {
                echo "<script>alert('Account already exists~!') </script>";
            }
        } else {
            echo "<script>alert('Please enter full infomation~!') </script>";
        }
    }
    ?>

    <div class="server_flex">
        <a class="server" href="fgear.php">Back to home page</a>
        <a class="server" href="update.php">Back update products page</a>
        <a class="server" href="delete.php">Back to delete products page</a>
    </div>
</body>

</html>